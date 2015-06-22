angular.module('app', [
	'ui.router',
	'restangular',
	'mm.foundation',
	'app.home',
	'app.login',
	'app.404'
])

.config(['$urlRouterProvider','$locationProvider',function ($urlRouterProvider,$locationProvider) {
	
	$locationProvider.html5Mode(true);
	
	$urlRouterProvider.otherwise('/404');
	
}]);