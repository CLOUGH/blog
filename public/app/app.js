angular.module('app', [
	'ui.router',
	'restangular',
	'mm.foundation',
	'app.home',
	'angular-loading-bar',
	'app.login',
	'app.posts',
	'app.404',
])

.config(['$urlRouterProvider','$locationProvider', 'RestangularProvider', 'cfpLoadingBarProvider',function ($urlRouterProvider,$locationProvider,RestangularProvider,cfpLoadingBarProvider) {
	
	RestangularProvider.setBaseUrl('./api');

	$locationProvider.html5Mode(true);
	
	$urlRouterProvider.otherwise('/404');
	
	cfpLoadingBarProvider.includeSpinner = false;
}]);