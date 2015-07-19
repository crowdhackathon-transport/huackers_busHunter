app.controller('RegisterCtrl', function($scope, $ionicHistory, $ionicPopup,$window, Authentication,$cordovaDevice,$translate){

	$scope.user = {
		"device_id" : "21231413131",
		"email" : "",
		"password" : ""
	}

	$scope.ChangeLanguage = function(lang){
		window.localStorage['lang'] = lang;
		$translate.use(lang);

	};

	$scope.register = function (form) { 
		if(!form.$valid) {
			form.email.$pristine=false;
			form.password.$pristine=false;
			return false;
		}

		Authentication.register($scope.user)
      	.then(function(response){  debugger;
      		$ionicHistory.nextViewOptions({
			    disableAnimate: true,
			    disableBack: true
			});
      		$window.location.href = '#/app/login';
      	}, function(error){
      		$scope.categoriesPopup = $ionicPopup.show({
	    		template: 'Παρουσιάστηκε κάποιο πρόβλημα κατά την εγγραφή σας στην εφαρμογή, παρακαλούμε δοκιμάστε ξανα.',
	    		title: 'Πρόβλημα Εγγραφής',
	    		scope: $scope,
	    		buttons: [ { 
	    			text: 'OK',
	    			type: 'button-positive'
	    		} ]
	      	});
      	
      	});
	}
});