// TODO Give option to users to select the stop that they want to go (we have to insert a button in InfoWindow)

app.controller('CheckinLineCtrl', function($scope, $compile, Routes,$stateParams, Stops, Location,Geofence,toaster,CultureData, $ionicModal) {

    // Save parameters from url
    $scope.route_id = $stateParams.route_id;
    $scope.direction =$stateParams.direction;
    $scope.cultureDataImg = false;

    // create the object with necessary fields
    $scope.currentLocationData = {
        route:$stateParams.route_id,
        dir:$stateParams.direction,
        email: window.localStorage['email']
    }

    //DATA FOR CULTURE DATA
    $scope.devList = [
        {text: "General", checked: true},
        {text: "Museum", checked: true},
        {text: "Sightseeing", checked: true},
        {text: "Theaters", checked: true},
        {text: "Art", checked: true},
        {text: "Spiritual Monuments", checked: true},
        {text: "Education", checked: true},
        {text: "Entertainment", checked: true},
        {text: "Parks", checked: true}
    ];
    $scope.by = {means: 'TRANSIT'};
    $scope.helper = {t: true};
    $scope.destList = [
        {type: 'General', list: [], icon: "img/misc.png", showList: false},
        {type: 'Museum', list: [], icon: "img/museum.png", showList: false},
        {type: 'Sightseeing', list: [], icon: "img/sights.png", showList: false},
        {type: 'Theaters', list: [], icon: "img/theater.png", showList: false},
        {type: 'Art', list: [], icon: "img/art.png", showList: false},
        {type: 'Spiritual Monuments', list: [], icon: "img/church.png", showList: false},
        {type: 'Education', list: [], icon: "img/education.png", showList: false},
        {type: 'Entertainment', list: [], icon: "img/entertainment.png", showList: false},
        {type: 'Parks', list: [], icon: "img/park.png", showList: false}
    ];

    var map;
    var bus_marker;

    $scope.basic_map = function()
    {
        google.maps.event.addDomListener(window, "load", initialize);
    }

    $scope.showNativeMaps = function (test){
        console.log(test);
        Geofence.createdGeofenceDraft = {
            id: UUIDjs.create().toString(),
            latitude: this.lat,
            longitude: this.lon,
            radius: 150,
            transitionType: TransitionType.ENTER,
            text:"Your selected stop is in 200 meter", //Text of notification
            smallIcon:"./img/woody.png",
            icon: "./img/bush-hunter.gif",
            vibration:      [1],
            openAppOnClick: true

        };
        console.log(Geofence.createdGeofenceDraft.id);
        $scope.geofence = Geofence.findById(Geofence.createdGeofenceDraft.id);
        Geofence.addOrUpdate($scope.geofence);
        window.plugins.toast.showLongBottom('You selected to disembark at '+test);
        console.log('Geofence successfully added');
    }
    function initialize(){

        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(0, -180),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // initialize map
        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        // initialize bus marker
        bus_marker = new MarkerWithLabel({
            position: new google.maps.LatLng(0, -180),
            map: map,
            animation: google.maps.Animation.BOUNCE,
            // labelContent: stops[i].name_el,
            icon: 'img/binbush.png'
        });



        var centerControlDiv = document.createElement('div');

        var cultureDataImg = document.createElement('img');
        if ($scope.cultureDataImg )
             cultureDataImg.setAttribute("src", "img/pois-on.png");
        else
            cultureDataImg.setAttribute("src", "img/pois-off.png");

        cultureDataImg.setAttribute("height", "48px");
        cultureDataImg.setAttribute("padding", "3px 11px");

        // Set CSS for the control border
        var controlUI = document.createElement('div');
        controlUI.style.height = '55px';
        controlUI.style.width  = '55px';
        controlUI.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '25px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.appendChild(cultureDataImg);
        centerControlDiv.appendChild(controlUI);

        setRating();
        setStatistics();
        google.maps.event.addDomListener(controlUI, 'click', function() {
            insertCultureDataToMap();
        });
        map.controls[google.maps.ControlPosition.LEFT_CENTER].push(centerControlDiv);


        // call service to getWayPoints based to route and direction
        Routes.getWayPoints({route: $scope.route_id, dir:$scope.direction})
            .then(function (response){
                // call function with response data
                addMPolylineToMap(response.points)
            }, function (error) {
                console.log('error in get routes')
            });

        // call service to stops based to route and direction
        Routes.getStopsbyRoute({route: $scope.route_id, dir:$scope.direction})
            .then(function (response){
                // add markers based on response data
                addMarkesToMap(response.stops)
            }, function (error) {
                console.log('error in get routes')
            });

        //get current position
        navigator.geolocation.getCurrentPosition(function(position) {

            //save lat lon in currentLocationData object
            $scope.currentLocationData['lat'] =position.coords.latitude;
            $scope.currentLocationData['lon'] =position.coords.longitude;
            // call the service which saves user's location
            Location.sendCurrentLocation($scope.currentLocationData);
            // add bus marker to map based on current position
            addBusMarkerToMap(position.coords.latitude, position.coords.longitude);
            console.log("Location Send");

        })

    };

    // this function creates the polyline in maps based on points
    function addMPolylineToMap(points){


        var flightPlanCoordinates = [];
        var bounds = new google.maps.LatLngBounds();

        for (var i=0;i<points.length;i++)
        {
            var pos = new google.maps.LatLng(points[i].lat,points[i].lon);
            bounds.extend(pos);
            flightPlanCoordinates.push(pos);

        }

        var flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        flightPath.setMap(map);
        map.setCenter(bounds.getCenter());

    }

    var infowindow = [];
    // this function puts stop markers to map
    function addMarkesToMap(stops)
    {
        var marker = null;


        for (var i = 0; i < stops.length;i++)
        {
            //******** IMPORTANT ************
            // In this infoWindow we should give the option to users to choose if they want to inform them to get down from the bus
            var content = '<div id="reparse_helper_'+i+'" >' +
                '<b><span ng-click="showNativeMaps('+stops[i].name_en+')">I want disembark HERE!</span></b>'
                //+
                //'<a href="javascript:void(0)" data-ng-click="showNativeMaps('+stops[i].lat+')"></a></div>' ;
            //var element = angular.element(infoWindow);
            //$compile(element.contents())($scope);
            var myLatLng = new google.maps.LatLng(stops[i].lat, stops[i].lon);
            // Market With Label puts label next to marker
            marker = new MarkerWithLabel({
                id: i,
                lat:stops[i].lat,
                lon:stops[i].lon,
                position: myLatLng,
                map: map,
                animation: google.maps.Animation.DROP,
                labelContent: stops[i].name_el,
                info: content,
                //stops[i].name_el+" "+stops[i].s_id + '<br>' +
                //'<div><span ng-click="showNativeMaps()">Click me to test data-ng-click</span></div>',
                icon: 'img/bus-stop_1.png'
            });

            infowindow[marker.id] = new google.maps.InfoWindow({
                content: content
            });

            google.maps.event.addListener(infowindow[marker.id], 'domready', function(a,b,c,d) {

                $scope.$apply(function(){
                    $compile(document.getElementById("reparse_helper_"+marker.id))($scope)
                });
            });

            //
            //google.maps.event.addListener(marker, 'domready', function() {
            //    console.log("reparse_helper_"+i);
            //    $scope.$apply(function(){
            //        $compile(document.getElementById("reparse_helper_"+i))($scope)
            //    });
            //});


            google.maps.event.addListener(marker, 'click', function() {
                //infowindow[marker.id].setContent(this.info);
                infowindow[marker.id].open(map, this);
                console.log("Lat lon selected station"+this.lat+" "+this.lon);
                $scope.selectedMarker = new google.maps.LatLng(this.lat, this.lon);

                // GeoFence is for creating notification when user is close to selected stop
                //Plugin https://github.com/cowbell/cordova-plugin-geofence
                //Ionic example https://github.com/cowbell/ionic-geofence


            });


        }
    }

    function addBusMarkerToMap(lat, lon)
    {
        var myLatLng = new google.maps.LatLng(lat, lon);
        bus_marker.setPosition(myLatLng);
    }

    initialize();



    setInterval(function(){

        navigator.geolocation.getCurrentPosition(function(position) {

            $scope.currentLocationData['lat'] =position.coords.latitude;
            $scope.currentLocationData['lon'] =position.coords.longitude;

            var currentpos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

            console.log ("Current "+currentpos);
            console.log ("marker "+$scope.selectedMarker);

            //var dist = Location.getDistanceBetween2points(currentpos,markerpos);
            var dist = google.maps.geometry.spherical.computeDistanceBetween( currentpos,$scope.selectedMarker);
            console.log("Distance -> " + dist);

            Location.sendCurrentLocation($scope.currentLocationData);
            addBusMarkerToMap(position.coords.latitude, position.coords.longitude);
            console.log("Location Send");
            var currentdate = new Date();
            console.log(currentdate.getHours() + ":"
            + currentdate.getMinutes() + ":"
            + currentdate.getSeconds());

            //window.plugins.toast.showLongBottom('Distance to stop:'+dist);
           // toaster.pop('success', "Distance", dist);
        })

    }, 5000);

    // send location on backgground
    cordova.plugins.backgroundMode.onactivate = function() {

          setInterval(function(){

          navigator.geolocation.getCurrentPosition(function(position) {

          $scope.currentLocationData['lat'] =position.coords.latitude;
          $scope.currentLocationData['lon'] =position.coords.longitude;
          Location.sendCurrentLocation($scope.currentLocationData);
          console.log("Location Send");
          var currentdate = new Date();
          console.log(currentdate.getHours() + ":"
          + currentdate.getMinutes() + ":"
          + currentdate.getSeconds());
          })

          }, 40000);


    };



    function insertCultureDataToMap()
    {
        navigator.geolocation.getCurrentPosition(function(position) {

            $scope.currentCultureData={};
            $scope.currentCultureData['lat'] =position.coords.latitude;
            $scope.currentCultureData['long'] =position.coords.longitude;
            $scope.currentCultureData['categories'] = 'Museum_Sightseeing_Theaters_Art_Spiritual Monuments_Education_Enterrtainment_Parks_General';
            CultureData.getCultureData($scope.currentCultureData)
                .then(function (response){
                // add markers based on response data
                    createCultureMarkers(response.results);
            }, function (error) {
                console.log('error in get culture data')
                    debugger;
            });
        });
    }

    function createCultureMarkers(data)
    {
        var L = $scope.devList, item, D = $scope.destList;
        for (var j = 0; j < data.length; j++) {
            if (data[j] == null)
                continue;
            item = data[j].category;
            if (item.search(/museum/i) != -1) {
                D[1].list.push(data[j]);
                // place a marker
                newMarker(D[1], data[j]);
                data[j] = null;
            }
            else if (item.search(/sight/i) != -1 ||
                item.search(/landmark/i) != -1 ||
                item.search(/historic/i) != -1) {
                D[2].list.push(data[j]);
                // place a marker
                console.log(D[2], data[j]);
                console.log("before newmarker");
                newMarker(D[2], data[j]);
                data[j] = null;
            }
            else if (item.search(/theater/i) != -1 ||
                item.search(/house/i) != -1 ||
                item.search(/hall/i) != -1) {
                D[3].list.push(data[j]);
                // place a marker
                newMarker(D[3], data[j]);
                data[j] = null;
            }
            else if (item.search(/art/i) != -1) {
                D[4].list.push(data[j]);
                // place a marker
                newMarker(D[4], data[j]);
                data[j] = null;
            }
            else if (item.search(/church/i) != -1 ||
                item.search(/temple/i) != -1) {
                D[5].list.push(data[j]);
                // place a marker
                newMarker(D[5], data[j]);
                data[j] = null;
            }
            else if (item.search(/library/i) != -1 ||
                item.search(/cultural/i) != -1 ||
                item.search(/book/i) != -1) {
                D[6].list.push(data[j]);
                // place a marker
                newMarker(D[6], data[j]);
                data[j] = null;
            }
        }

    }
    var previnfo;
    function newMarker(i, x) {
        console.log("In newmarker");
        x.infow = new google.maps.InfoWindow();
        x.marker = new google.maps.Marker({
            position: new google.maps.LatLng(x.lat, x.long),
            map: map,
            icon: i.icon
        });
        var content = '<a href="" ng-click="openRight(\'' + x.lat + '\', \'' + i.type + '\', \'' + x.id + '\', \'' + x.source + '\')"><strong>' + x.name + '</strong></a>';
        var compiled = $compile(content)($scope);
        x.infow.setContent(compiled[0]);
        x.opened = false;
        google.maps.event.addListener(x.marker, 'mousedown', function () {
            if(previnfo){
                previnfo.close();
            }
            x.infow.open(map, this);
            $scope.markerEvent(i, x);
            previnfo = x.infow;
        });
    };

    $scope.markerEvent = function (a, b) {
        $scope.destList.forEach(function (l) {
            l.showList = false;
            l.list.forEach(function (it) {
                it.opened = false;
            });
        });
        a.showList = true;
        b.opened = true;
        //b.infow.open($scope.map, b.marker);
    };


    function setRating() {
        $scope.rating1 = 1;
        $scope.rating2 = 1;
        $scope.rating3 = 1;
        $scope.rating4 = 1;

        var centerControlDiv = document.createElement('div');
        centerControlDiv.onclick = function () {
            $ionicModal.fromTemplateUrl('my-modal.html', {
                scope: $scope,
                animation: 'slide-in-up'
            }).then(function(modal) {
                console.log( 'modal', modal )
                $scope.modal = modal;
                $scope.openModal()
            });

            $scope.openModal = function() {
                $scope.modal.show();
            };

            $scope.closeModal = function() {
                $scope.modal.hide();
            };

            //Cleanup the modal when we're done with it!
            $scope.$on('$destroy', function() {
                $scope.modal.remove();
            });
            // Execute action on hide modal
            $scope.$on('modal.hidden', function() {
                // Execute action
            });
            // Execute action on remove modal
            $scope.$on('modal.removed', function() {
                // Execute action
            });
        }
        var cultureDataImg = document.createElement('img');
        cultureDataImg.setAttribute("src", "img/rating.png");

        cultureDataImg.setAttribute("height", "48px");
        cultureDataImg.setAttribute("padding", "3px 11px");

        // Set CSS for the control border
        var controlUI = document.createElement('div');
        controlUI.style.height = '55px';
        controlUI.style.width  = '55px';
        controlUI.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '25px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.appendChild(cultureDataImg);
        centerControlDiv.appendChild(controlUI);


        var $rating = angular.element(centerControlDiv)

        console.log( '$rating', $rating )
        map.controls[google.maps.ControlPosition.LEFT_CENTER].push($rating[0]);
    }



    function setStatistics() {

        var centerControlDiv = document.createElement('div');
        centerControlDiv.onclick = function () {




            $ionicModal.fromTemplateUrl('my-stats.html', {
                scope: $scope,
                animation: 'slide-in-up'
            }).then(function(modal) {
                console.log( 'modal', modal )
                $scope.modal = modal;
                $scope.openModal()
            });

            $scope.openModal = function() {

                $scope.labels =["Comfort", "Route Duration", "Arrival Time", "Driver"];
                //$scope.colours = ["#97BBCD", "#DCDCDC", "#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"]
                $scope.colours = ["Yellow", "Yellow"]
                $scope.data = [
                    [28, 32, 40, 19]
                ];

                $scope.modal.show();



            };

            $scope.closeModal = function() {
                $scope.modal.hide();
            };

            //Cleanup the modal when we're done with it!
            $scope.$on('$destroy', function() {
                $scope.modal.remove();
            });
            // Execute action on hide modal
            $scope.$on('modal.hidden', function() {
                // Execute action
            });
            // Execute action on remove modal
            $scope.$on('modal.removed', function() {
                // Execute action
            });
        }
        var cultureDataImg = document.createElement('img');
        cultureDataImg.setAttribute("src", "img/stats-icon.png");

        cultureDataImg.setAttribute("height", "48px");
        cultureDataImg.setAttribute("padding", "3px 11px");

        // Set CSS for the control border
        var controlUI = document.createElement('div');
        controlUI.style.height = '55px';
        controlUI.style.width  = '55px';
        controlUI.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.borderRadius = '25px';
        controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlUI.appendChild(cultureDataImg);
        centerControlDiv.appendChild(controlUI);


        var $rating = angular.element(centerControlDiv)

        console.log( '$rating', $rating )
        map.controls[google.maps.ControlPosition.LEFT_CENTER].push($rating[0]);
    }
    $scope.rateFunction = function(rating) {
        console.log("Rating selected: " + rating);
    };

})
    .directive("starRating", function() {
        return {
            restrict: "EA",
            template: "<ul class='rating' ng-class='{readonly: readonly}'>" +
            "  <li ng-repeat='star in stars' ng-class='star' ng-click='toggle($index)'>" +
            "    <i class='ion-android-star'></i>" + //&#9733
            "  </li>" +
            "</ul>",
            scope: {
                ratingValue: "=ngModel",
                max: "=?", //optional: default is 5
                onRatingSelected: "&?",
                readonly: "=?"
            },
            link: function (scope, elem, attrs) {
                if (scope.max == undefined) {
                    scope.max = 5;
                }
                function updateStars() {
                    scope.stars = [];
                    for (var i = 0; i < scope.max; i++) {
                        scope.stars.push({
                            filled: i < scope.ratingValue
                        });
                    }
                };
                scope.toggle = function (index) {
                    if (scope.readonly == undefined || scope.readonly == false) {
                        scope.ratingValue = index + 1;
                        scope.onRatingSelected({
                            rating: index + 1
                        });
                    }
                };
                scope.$watch("ratingValue", function (oldVal, newVal) {
                    if (newVal) {
                        updateStars();
                    }
                });
            }
        }
    });