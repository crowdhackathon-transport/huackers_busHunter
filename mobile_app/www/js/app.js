// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.controllers' is found in controllers.js ,
var app = angular.module('starter', ['ionic','starter.directives','pascalprecht.translate','ngCordova','ngDropdowns','toaster', 'chart.js'])

app
  .config(function($translateProvider) {

      for(lang in translations){
        $translateProvider.translations(lang, translations[lang]);
      }

      //find the preferred language in local storage
      if(window.localStorage['lang'])
        $translateProvider.preferredLanguage(window.localStorage['lang']);
      else
        $translateProvider.preferredLanguage('el');
  })
  .run(function( $ionicPlatform) {
    $ionicPlatform.ready(function() {
      // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
      // for form inputs)
      if (window.cordova && window.cordova.plugins.Keyboard) {
        cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
      }
      if (window.StatusBar) {
        // org.apache.cordova.statusbar required
        StatusBar.styleDefault();
      }

      // enable background mode
      //cordova.plugins.backgroundMode.enable();

      // initialize geofence
        if (window.geofence) {
            window.geofence.initialize();

            window.geofence.onTransitionReceived = function (geofences) {
                $log.log(geofences);
                if (geofences) {
                    $rootScope.$apply(function () {
                        geofences.forEach(function (geo) {
                            geo.notification = geo.notification || {
                                title: 'Geofence transition',
                                text: 'Without notification'
                            };
                            toaster.pop('info', geo.notification.title, geo.notification.text);
                        });
                    });
                }
            };

            window.geofence.onNotificationClicked = function (notificationData) {
                $log.log(notificationData);
                if (notificationData) {
                    $rootScope.$apply(function () {
                        toaster.pop('warning', 'Notification clicked', notificationData.notification.text);
                    });
                }
            };
        }
        if (window.plugins && window.plugins.webintent) {
            $log.log('WebIntent plugin found');
            window.plugins.webintent.getExtra('geofence.notification.data',
                function (geofenceJson) {
                    if (geofenceJson) {
                        var geofence = angular.fromJson(geofenceJson);
                        $log.log('geofence.notification.data', geofence);
                        $state.go('geofence', {
                            geofenceId: geofence.id
                        });
                    }
                },
                function () {
                    $log.log('no extra geofence.notification.data supplied');
                    // There was no extra supplied.
                }
            );
        }


    })
  })
  .config(function($stateProvider, $urlRouterProvider) {

    $stateProvider
        .state('app', {
          url: "/app",
          abstract: true,
          templateUrl: "templates/menu.html"
        })
        .state('app.options', {
          url: "/options",
          views: {
            'menuContent': {
              templateUrl: "templates/options.html",
              controller: 'OptionsCtrl'
            }
          }
        })
        .state('app.sendLocation', {
          url: "/send",
          views: {
            'menuContent': {
              templateUrl: "templates/send_location.html",
              controller: 'SendLocationCtrl'
            }
          }
        })
        .state('app.map', {
          url: "/map",
          views: {
            'menuContent': {
              templateUrl: "templates/google_map.html",
              controller: 'GoogleMapsCtrl'
            }
          }
        })
        .state('app.selectline', {
          url: "/selectline",
          views: {
            'menuContent': {
              templateUrl: "templates/select_line.html",
              controller: 'selectLineCtrl'
            }
          }
        })
        .state('app.selectlinetocheckin', {
          url: "/selectlinetocheckin",
          views: {
            'menuContent': {
              templateUrl: "templates/select_line_to_check_in.html",
              controller: 'selectLineToCheckInCtrl'
            }
          }
        })
        .state('app.route', {
          url: "/route/:route_id/:direction",
          views: {
            'menuContent': {
              templateUrl: "templates/google_map_route.html",
              controller: 'GoogleMapsRouteCtrl'
            }
          }
        })
        .state('app.checkin', {
            url: "/checkin",
            views: {
              'menuContent': {
                templateUrl : 'templates/checkin.html',
                controller : 'CheckinCtrl'
              }
            }
        })
        .state('app.checkin_new', {
            url: "/checkin/:route_id/:direction",
            views: {
              'menuContent': {
                templateUrl : 'templates/checkin_line.html',
                controller : 'CheckinLineCtrl'
              }
            }
          })
        .state('register', {
          url: "/register",
          templateUrl: "templates/register.html",
          controller: 'RegisterCtrl'
        })
        .state('login', {
          url: "/login",
          templateUrl: "templates/login.html",
          controller: 'LoginCtrl'
        })
        .state('logout', {
          url: "/logout",
          controller: 'LogoutCtrl',
          template: "<ion-view cache-view=\"false\"></ion-vie>"
        })
        .state('googlemaps', {
          url: "/googlemaps",
          templateUrl: "templates/google_map.html",
          controller: 'GoogleMapsCtrl'
        })
        .state('googlemapsroute', {
          url: "/googleroute/:route_id/:direction",
          templateUrl: "templates/google_map_route.html",
          controller: 'GoogleMapsRouteCtrl'
        })
        .state('splash', {
          url: "/splash",
          templateUrl: "templates/splash.html",
          controller: 'SplashCtrl'
        })

    // if none of the above states are matched, use this as the fallback
    $urlRouterProvider.otherwise('/splash');
  });
