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
angular.module('app.blog', [
	'ui.router',
	'restangular',
])

.config(['$stateProvider',function ($stateProvider) {
	$stateProvider.state('blog',{
		url: '/blog',
		templateUrl: 'app/blog/blog.html',
		controller: 'BlogCtrl',
		resolve : {
			posts : function(Restangular){
				return Restangular.all('posts').getList();
			}
		},
		data : {

		}
	});
}])

.controller('BlogCtrl', ['$scope', '$state','Restangular', 'posts',function ($scope,$state,Restangular,posts) {

	$scope.activeNav = 'blog';
	console.log(posts);
	$scope.posts = posts;
	
}]);
angular.module('app.404', [])

.config(['$stateProvider',function ($stateProvider) {
	$stateProvider.state('404',{
		url: '/404',
		templateUrl: 'app/404/404.html',
		controller: '404Ctrl',
		data : {

		}
	});
}])

.controller('404Ctrl', ['$scope', function ($scope) {
	
}]);
angular.module('app.home',[])

.config(['$stateProvider',function ($stateProvider) {
	$stateProvider.state('home',{
		url: '/',
		templateUrl: 'app/home/home.html',
		controller: 'HomeCtrl',
		data : {

		}
	});
}])

.controller('HomeCtrl', ['$scope', function ($scope) {
	$scope.activeNav = 'home';
}]);
angular.module('app.login', [
	'ui.router'
])

.config(['$stateProvider',function ($stateProvider) {
	$stateProvider.state('login',{
		url: '/login',
		templateUrl: 'app/login/login.html',
		controller: 'LoginCtrl',
		data : {

		}
	});
}])

.controller('LoginCtrl', ['$scope', '$state',function ($scope,$state) {

	$scope.login = function(){
		$state.go('home');
	}
	
}]);
//# sourceMappingURL=app.js.map