app.factory('Routes', function($http, $q, Web) {

    return{

        getAllRoutes : function(){
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: Web.getAllRoutesUrl(),
                headers: { 'Content-Type' : 'application/json' }
            }).success(function(data) {
                deferred.resolve(data);
            }).error(function(data){
                deferred.reject(data);
            });

            return deferred.promise;
        },
        getStopsbyRoute: function(route_id){
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: Web.getStopsByRouteUrl(route_id),
                headers: { 'Content-Type': 'application/json'}
            }).success(function(data) {
                deferred.resolve(data);
            }).error(function(data){
                deferred.reject(data);
            });

            return deferred.promise;
        },
        getWayPoints: function(route_direction){
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: Web.getWayPointsUrl(route_direction),
                headers: { 'Content-Type': 'application/json'}
            }).success(function(data) {
                deferred.resolve(data);
            }).error(function(data){
                deferred.reject(data);
            });

            return deferred.promise;
        },
        getNearLines: function(lat_lon){
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: Web.getNearLinesUrl(lat_lon),
                headers: { 'Content-Type': 'application/json'}
            }).success(function(data) {
                deferred.resolve(data);
            }).error(function(data){
                deferred.reject(data);
            });

            return deferred.promise;
        },
        reverseLineName : function (linename)
        {
            var values = linename.split("-");

            if ( values.length == 2)
                return values[1]+" - "+values[0];
            else if( values.length == 3)
                return values[2]+" - "+values[1]+" - "+values[0];
            else if( values.length == 4)
                return values[3]+" - "+ values[2]+" - "+values[1]+" - "+values[0];
        },
        checkIfFavorited:function (route,dir)
        {
            //var json_array = JSON.parse(window.localStorage['favorites']);
            //console.log(json_array);
            ////debugger;

            //for (var i =0;i<window.localStorage['favorites'].length;i++)
            //{
            //    console.log(window.localStorage['favorites'][i].route);
            //    if(window.localStorage['favorites'][i].route == route &&
            //        window.localStorage['favorites'][i].dir == dir )
            //        return true;
            //
            //}
            return false;
        },
        getBusLocation: function(route_direction){
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: Web.getBusLocationUrl(route_direction),
                headers: { 'Content-Type': 'application/json'}
            }).success(function(data) {
                deferred.resolve(data);
            }).error(function(data){
                deferred.reject(data);
            });

            return deferred.promise;
        },


    }

});