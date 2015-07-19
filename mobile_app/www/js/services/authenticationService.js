app.factory('Authentication', function($http, $q, $window, $sanitize, transformRequestAsFormPost,Web) {
	var sanitizeCredentials = function(credentials) {
    	return {
      		email: $sanitize(credentials.email),
      		password: $sanitize(credentials.password)
    	};
  	};

	return {

		register : function(userData) {
			var deferred = $q.defer();
			$http({
				method: 'POST',
				url: Web.getRegisterUrl(),
				headers: { 'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8' },
				data: transformRequestAsFormPost.transform(userData)
			}).success(function(data) {
				deferred.resolve(data);
			}).error(function(data){
				deferred.reject(data);
			});

			return deferred.promise;
		},
		login : function(credentials) {
			var deferred = $q.defer();
			console.log(credentials);
			debugger;
			$http({
				method: 'POST',
				url: Web.getLoginUrl(),
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
				data: transformRequestAsFormPost.transform(credentials)
			}).success(function(data) {
				window.localStorage['email'] = credentials.email;
				window.localStorage['device_id'] = credentials.device_id;
				var temp=[];
				window.localStorage['favorites'] = JSON.stringify(temp);
				deferred.resolve(data);
			}).error(function(data){
				deferred.reject(data);
			});

			return deferred.promise;
		}
		,
		logout : function(credentials) {
			window.localStorage.removeItem('device_id');
			window.localStorage.removeItem('email');
			window.localStorage.removeItem('favorites');
			$window.location.href = '#/login';
		}

	}
});