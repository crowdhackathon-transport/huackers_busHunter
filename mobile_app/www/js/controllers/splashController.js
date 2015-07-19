app.controller('SplashCtrl', function($scope, $timeout, $window){
	$timeout(function() {
       	if( window.localStorage['device_id'] &&
			window.localStorage['email'])
			$window.location.href = '#/app/map';
		else
			$window.location.href = '#/app/map';
    }, 2000);
});