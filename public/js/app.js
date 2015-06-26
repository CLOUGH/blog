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
angular.module('app.posts', [
	'ui.router',
	'restangular',
])

.config(['$stateProvider',function ($stateProvider) {
	$stateProvider
	.state('posts',{
		url: '/posts',
		templateUrl: 'app/posts/index.html',
		controller: 'PostCtrl',
		resolve : {
			posts : function(Restangular){
				return Restangular.all('posts').getList();
			}
		},
		data : {

		}
	})
	.state('posts/show',{
		url:'/posts/:id',
		templateUrl:'app/posts/show.html',
		controller: 'PostDetailsCtrl',
		resolve: {
			post : function(Restangular,$stateParams){
				return Restangular.one('posts',$stateParams.id).get();
			}
		},
		data : {

		}
	})
}])

.controller('PostCtrl', ['$scope', '$state','Restangular', 'posts',function ($scope,$state,Restangular,posts) {

	$scope.activeNav = 'posts';
	$scope.posts = posts;
	
}])


.controller('PostDetailsCtrl', ['$scope','post', function($scope,post){
	$scope.activeNav = 'posts';
	$scope.post = post;
}])
angular.module('app').directive('holderjs', function () {
    return {
        link: function (scope, element, attrs) {
            Holder.run({ images: element[0], nocss: true });
        }
    };
});
//# sourceMappingURL=app.js.map