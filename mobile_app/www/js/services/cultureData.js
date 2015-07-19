app.factory('CultureData', function($http, $q, $window, $sanitize, transformRequestAsFormPost,Web) {

    return {

        getCultureData: function (locationData) {
            var deferred = $q.defer();
            console.log(locationData);
            //debugger;
            $http({
                method: 'GET',
                url: Web.getCultureDataUrl(locationData),
                headers: {'Content-Type': 'application/json'}
            }).success(function (data) {
                deferred.resolve(data);
            }).error(function (data) {
                deferred.reject(data);
                debugger;
            });

            return deferred.promise;
        }
    }


});