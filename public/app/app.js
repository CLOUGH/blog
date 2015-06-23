angular.module('app', [
	'ui.router',
	'restangular',
	'mm.foundation',
	'app.home',
	'app.login',
	'app.blog',
	'app.404',
])

.config(['$urlRouterProvider','$locationProvider', 'RestangularProvider',function ($urlRouterProvider,$locationProvider,RestangularProvider) {
	
	RestangularProvider.setBaseUrl('./api');

	$locationProvider.html5Mode(true);
	
	$urlRouterProvider.otherwise('/404');
	
}]);