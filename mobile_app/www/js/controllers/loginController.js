app.controller('LoginCtrl', function($scope, $ionicHistory, $ionicPopup,$cordovaDevice, $window,$translate,Authentication){

	//on phone device_id = $cordovaDevice.getUUID();
	$scope.credentials = {
		email : "",
		device_id : "1234",
		password: ""
	};
	
	$scope.login = function (form) { 
		if(!form.$valid) {
			form.email.$pristine=false;
			return false;
		}

		Authentication.login($scope.credentials)
			.then(function(response){
				$ionicHistory.nextViewOptions({
					disableAnimate: true,
					disableBack: true
				});
				$window.location.href = '#/app/map';

			}, function(error){
				$scope.categoriesPopup = $ionicPopup.show({
					template: 'Τα στοιχεία που εισάγατε δεν είναι σωστά, παρακαλούμε δοκιμάστε ξανα.',
					title: 'Πρόβλημα Σύνδεσης',
					scope: $scope,
					buttons: [ {
						text: 'OK',
						type: 'button-positive'
					} ]
				});
			});
	}

	$scope.ChangeLanguage = function(lang){
		window.localStorage['lang'] = lang;
		$translate.use(lang);

	};

});