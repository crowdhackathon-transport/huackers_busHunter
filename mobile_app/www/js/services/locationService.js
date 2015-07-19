app.factory('Location', function($http, $q, $window, $sanitize, transformRequestAsFormPost,Web) {

    var rad = function(x) {
        return x * Math.PI / 180;
    };


    return {

        sendCurrentLocation: function (locationData) {
            var deferred = $q.defer();
            console.log(locationData);
            //debugger;
            $http({
                method: 'POST',
                url: Web.postCurrentLocation(),
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                data: transformRequestAsFormPost.transform(locationData)
            }).success(function (data) {
                deferred.resolve(data);
            }).error(function (data) {
                deferred.reject(data);
            });

            return deferred.promise;
        }
        //getDistance
        //,
        //getDistanceBetween2points: function (p1, p2) {
        //    console.log("In distance");
        //    console.log(p1);
        //    console.log(p2);
        //    var R = 6378137; // Earth’s mean radius in meter
        //    var dLat = rad(p2.lat() - p1.lat());
        //    var dLong = rad(p2.lng() - p1.lng());
        //    var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        //        Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) *
        //        Math.sin(dLong / 2) * Math.sin(dLong / 2);
        //    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        //    var d = R * c;
        //    return d; // returns the distance in meter
        //}

    }


});