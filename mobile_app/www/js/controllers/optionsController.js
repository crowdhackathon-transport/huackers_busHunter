app.controller('OptionsCtrl', function($scope, $ionicHistory, $ionicPopup, $window, Routes,$cordovaGeolocation) {

    $scope.currentLocationData ={
        "email": window.localStorage['email']
    }

    Routes.getAllRoutes()
        .then(function (response) {
            $scope.routes = angular.copy(response);
            $scope.ddSelectSelected = response[0];
        }, function (error) {
            console.log('error in get routes')
        });

    $cordovaGeolocation.getCurrentPosition()
        .then(function (position) {
            $scope.lat = position.coords.latitude
            $scope.long = position.coords.longitude
        });

    $scope.select_route = function(selected)
    {

        $window.location.href = '#/app/route/'+selected.route_short_name;
        console.log(selected.route_short_name);
        //Routes.getStopsbyRoute({route:selected.route_short_name})
        //    .then(function (response) {
        //    $scope.stops = angular.copy(response);
        //        debugger;
        //}, function (error) {
        //    console.log('error in get routes')
        //        debugger;
        //});

        //$scope.currentLocationData['lat'] =$scope.lat;
        //$scope.currentLocationData['lon'] =$scope.long;
        //
        //Location.sendCurrentLocation($scope.currentLocationData)
        //    .then(function (response) {
        //        console.log("Location send");
        //
        //    }, function (error) {
        //        console.log('error in get routes')
        //    });
        //debugger;

    }

});
