app.factory('Stops', function($http, $q, Web) {

    return{

        getNearStops : function(position){
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: Web.getNearStopsUrl(position),
                headers: { 'Content-Type' : 'application/json' }
            }).success(function(data) {
                deferred.resolve(data);
            }).error(function(data){
                deferred.reject(data);
            });

            return deferred.promise;
        },
        getLinesFromStop : function(stop_id){
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: Web.getLinesFromStopUrl(stop_id),
                headers: { 'Content-Type' : 'application/json' }
            }).success(function(data) {
                deferred.resolve(data);
            }).error(function(data){
                deferred.reject(data);
            });

            return deferred.promise;
        }

        }

});