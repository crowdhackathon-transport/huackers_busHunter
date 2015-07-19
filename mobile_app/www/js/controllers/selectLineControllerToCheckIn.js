// TODO: Add lines to favorites

app.controller('selectLineToCheckInCtrl', function($scope, $stateParams, $cordovaGeolocation, Routes) {

    var map;
    // try to get position
    var options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };
    navigator.geolocation.getCurrentPosition(success, error, options);

    function success(pos) {

        $scope.getNearLines(pos);
        $scope.getAllLines();
    }

    function error(err) {
        console.warn('ERROR(' + err.code + '): ' + err.message);
    };

    $scope.getNearLines = function(pos) {

        Routes.getNearLines({lat:pos.coords.latitude,lon:pos.coords.longitude})
            .then(function (response) {

                $scope.nearLines = [];
                var name="";

                for (var i =0; i < response.lines.length; i++)
                {
                    if (window.localStorage['lang'] == 'en')
                        name = response.lines[i].line_name_en;
                    else
                        name = response.lines[i].line_name_el;

                    //reverse the name of bus line
                    if (response.lines[i].direction_flag == 2)
                    {
                        name =  Routes.reverseLineName(name);
                    }

                    //check if this line is users favorited
                   if(Routes.checkIfFavorited(response.lines[i].line_id,response.lines[i].direction_flag))
                        var isFavorited = true;
                    else
                       var isFavorited = false;


                    var json = {name:name,line_id:response.lines[i].line_id,dir:response.lines[i].direction_flag,fave:isFavorited};
                    $scope.nearLines.push(json);
                }

                $scope.lines = angular.copy($scope.nearLines);



            }, function (error) {
                console.log('error in get getNearLines')
            });

    }

    $scope.getAllLines = function(pos) {

        Routes.getAllRoutes()
            .then(function (response) {
                $scope.allLines = [];
                var name="";

                for (var i =0; i < response.length; i++)
                {
                    if (window.localStorage['lang'] == 'en')
                        name = response[i].line_name_en;
                    else
                        name = response[i].line_name_el;

                    //reverse the name of bus line
                    /*if (response.lines[i].direction_flag == 2)
                    {
                        name =  Routes.reverseLineName(name);
                    }*/

                    var json = {name:name,line_id:response[i]._id,dir:1};
                    $scope.allLines.push(json);
                }

            }, function (error) {
                console.log('error in get getNearLines')
            });

    }

    $scope.showNearLines = function () {
       // $scope.lines = angular.copy($scope.nearLines);
    }

    $scope.showAllLines = function () {
        $scope.lines = angular.copy($scope.allLines);
    }

    $scope.addToFavorites = function(line,dir)
    {
        var temp = JSON.stringify({route:line,dir:dir});
        console.log(temp);
        window.localStorage['favorites'].push(temp);
        alert("Added to favorites");

    }



});