app.controller('RoutesCtrl', function($scope, $stateParams, $cordovaGeolocation, Routes) {

    //initialize vars
    $scope.map = {};
    $scope.map.markers = [];
    // get all stops by selected route in order to show them on map
    $scope.initialize= function() {
        console.log($stateParams.route_id);
        console.log($stateParams.direction);

        $scope.route_id = $stateParams.route_id;
        $scope.direction = $stateParams.direction;
        Routes.getStopsbyRoute({route: $scope.route_id, dir:$scope.direction})
            .then(function (response) {
                debugger;
                $scope.stops = angular.copy(response.stops);
                $scope.route_direction = response.stops[0].direction;
                $cordovaGeolocation
                    .getCurrentPosition()
                    .then(onSuccess, onError)

            }, function (error) {
                console.log('error in get routes')
            });
    };

    function onSuccess( position ) {

        console.log('Success getting position', position);
        //$scope.currentLocationData['lat'] = position.coords.latitude;
        //$scope.currentLocationData['lon'] = position.coords.longitude;

        $scope.map.center = {
            latitude: position.coords.latitude,
            longitude: position.coords.longitude
        };
        $scope.map.zoom = 15;



        var poly_path = [];
        for (var i=0; i<$scope.stops.length;i++)
        {
           // debugger;
            $scope.map.markers.push({
                id: i,
                latitude: $scope.stops[i].stop_lat,
                longitude: $scope.stops[i].stop_lon,
                title: $scope.stops[i].stop_name,
                showWindow: false,
                options: {labelClass:'marker-labels',labelContent:'label',labelAnchor:'12 60',labelContent:$scope.stops[i].stop_name}
            })

            poly_path.push({
                latitude: $scope.stops[i].stop_lat,
                longitude: $scope.stops[i].stop_lon
            })
        };

        $scope.map.polylines = [
            {
                id: 3,
                path: poly_path,
                stroke: {
                    color: '#FF0066',
                    weight: 3
                },
                editable: true,
                draggable: true,
                geodesic: true,
                visible: true,
                fit:true
            }
        ];
        //debugger;


        //$scope.user.location.center = $scope.map.center;
    }

    function onError( error ) {

        console.log( 'Error getting current position', error )
        $scope.map = {center: {latitude: 51.219053, longitude: 4.404418 }, zoom: 14 };
    }

    $scope.initialize();

});/**
 * Created by user on 30/6/2015.
 */
