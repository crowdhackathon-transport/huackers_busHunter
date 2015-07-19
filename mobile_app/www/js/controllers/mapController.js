app.controller('MapCtrl', function($scope, $window, $cordovaGeolocation,Location) {

    console.log( 'Map Controller initialized' );
    $scope.currentLocationData = {
        "email": window.localStorage['email'],
        "route":2
    }


    // clear interval on destroy!!!
    var watchId = navigator.geolocation.watchPosition(
        function( position ) {
            console.log( 'Location changed', position );

        },
        function( error ) {
            console.log( 'Location changed error', error )
        },
        { enableHighAccuracy: true })

    // Internal functions
    function getCurrentPosition ( ) {

        $cordovaGeolocation
            .getCurrentPosition()
            .then(onSuccess, onError)
    }

    // Success on getting current position
    function onSuccess( position ) {

        console.log( 'Success getting position', position );
        $scope.currentLocationData['lat'] = position.coords.latitude;
        $scope.currentLocationData['lon'] = position.coords.longitude;

        $scope.map.center = {
            latitude    : position.coords.latitude,
            longitude   : position.coords.longitude
        };

        $scope.map.infoWindowWithCustomClass.coords = {
            latitude    : position.coords.latitude,
            longitude   : position.coords.longitude
        };

        $scope.user.location.center = $scope.map.center;

        ////just want to create this loop to make more markers
        //for(var i=0; i<3; i++) {
        //    $scope.map.markers.push({
        //        id: $scope.map.markers.length,
        //        latitude: lat + (i * 0.002),
        //        longitude: long + (i * 0.002),
        //        title: 'm' + i,
        //        icon: 'img/ionic.png',
        //        showWindow: false,
        //        options: {animation:1,labelClass:'marker-labels',labelContent:'label',labelAnchor:'12 60',labelContent:'label '+i}
        //    })
        //}
        //
        //$scope.map.markers.forEach( function (marker) {
        //    marker.onClicked = function () {
        //        console.log("In clicked");
        //        console.log(marker);
        //        marker.showWindow = true;
        //        $scope.marker_id = marker.id;
        //        $scope.$apply();
        //
        //    };
        //    marker.closeClick = function () {
        //        marker.showWindow = false;
        //        $scope.$evalAsync();
        //    };
        //});

    }

    // Error on getting current position
    function onError( error ) {

        console.log( 'Error getting current position', error )
        $scope.map = {center: {latitude: 51.219053, longitude: 4.404418 }, zoom: 14 };
    }


    // Scope functions
    $scope.checkIn = function ( ) {

        console.log( 'Check in' );
        $window.location.href = '#/app/checkin';
    }

    // Init
    getCurrentPosition( );


    // ------------ It works-----------------------------x`
    // send location to server every 10 seconds
    //setInterval(function(){
    //    Location.sendCurrentLocation($scope.currentLocationData);
    //    console.log("Location send to server");
    //}, 10000);

    // TODO: Re-Create model
    $scope.map = {
        center: {
            latitude: null,
            longitude: null
        },
        zoom: 15,
        markers: [], // array of models to display
        markersEvents: {
            click: function(marker, eventName, model, arguments) {
                $scope.map.window.model = model;
                $scope.map.window.show = true;
                console.log("In click " +model.options.labelContent);
            }
        },
        window: {
            marker: {},
            closeClick: function() {
                this.show = false;
            },
            options: {} // define when map is ready
        },
        infoWindowWithCustomClass: {
            coords: {
                latitude: null,
                longitude: null
            },
            options: {
                boxClass: 'custom-info-window',
                closeBoxDiv: '<div" class="pull-right" style="position: relative; cursor: pointer; margin: -20px -15px;">X</div>',
                disableAutoPan: true
            },
            show: true
        }
    };

    $scope.user = {
        location: {
            id: 1,
            center: {
                latitude: null,
                longitude: null
            },
            radius: 50,
            stroke: {
                color: '#FF8E00',
                weight: 2,
                opacity: 1
            },
            fill: {
                color: '#FF8E00',
                opacity: 0.5
            }
        }
    }
});


