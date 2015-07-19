app.controller('GoogleMapsRouteCtrl', function($scope, Routes,$stateParams, Stops) {

    $scope.route_id = $stateParams.route_id;
    $scope.direction = $stateParams.direction;
    var map;
    var bus_marker;

    function initialize(){

        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(0, -180),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById('map'),
            mapOptions);

        bus_marker = new MarkerWithLabel({
            position: new google.maps.LatLng(0, -180),
            map: map,
            animation: google.maps.Animation.BOUNCE,
            // labelContent: stops[i].name_el,
            icon: 'img/binbush.png'
        });

        //Service to get stops
       /* Routes.getStopsbyRoute({route: $scope.route_id, dir:$scope.direction})
            .then(function (response) {
                addMarkersAndPolylineToMap(response.stops)
            }, function (error) {
                console.log('error in get routes')
            });*/
        Routes.getWayPoints({route: $scope.route_id, dir:$scope.direction})
            .then(function (response){
                addMPolylineToMap(response.points)
            }, function (error) {
                console.log('error in get routes')
            });

        Routes.getStopsbyRoute({route: $scope.route_id, dir:$scope.direction})
            .then(function (response){
                addMarkesToMap(response.stops)
            }, function (error) {
                console.log('error in get routes')
            });

        Routes.getBusLocation({route: $scope.route_id, dir:$scope.direction})
            .then(function (response){
                addBusMarkerToMap(response[0].lat,response[0].lon)
            }, function (error) {
                console.log('error in get bus location')
            });

        //get bus position every 20 seconds
        setInterval(function(){

            Routes.getBusLocation({route: $scope.route_id, dir:$scope.direction})
                .then(function (response){
                    addBusMarkerToMap(response[0].lat,response[0].lon)
                }, function (error) {
                    console.log('error in get bus location')
                });

        }, 20000);

    };

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

    function addMarkesToMap(stops)
    {
        var marker = null;
        var infowindow = new google.maps.InfoWindow();

        for (var i = 0; i < stops.length;i++)
        {
            var myLatLng = new google.maps.LatLng(stops[i].lat, stops[i].lon);
            // Market With Label puts label next to marker
            marker = new MarkerWithLabel({
                position: myLatLng,
                map: map,
                animation: google.maps.Animation.DROP,
               // labelContent: stops[i].name_el,
                info: stops[i].name_el,
                icon: 'img/bus-stop_1.png'
            });


            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(this.info);
                infowindow.open(map, this);
            });
        }
    }

    function addBusMarkerToMap(lat, lon)
    {
        var myLatLng = new google.maps.LatLng(lat, lon);
        bus_marker.setPosition(myLatLng);
    }

    initialize();


});