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