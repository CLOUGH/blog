angular.module('app.posts', [
	'ui.router',
	'restangular',
])

.config(['$stateProvider',function ($stateProvider) {
	$stateProvider.state('posts',{
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
	});
	$stateProvider.state('posts.show',{
		url:'/posts/:postId',
		templateUrl:'app/posts/show.html',
		controller: 'PostDetailsCtrl',
		resolve: {
			post : function(Restangular,$stateParams){
				return Restangular.one('posts',$stateParams.postID).get();
			}
		},
		data : {

		}
	})
}])

.controller('PostCtrl', ['$scope', '$state','Restangular', 'posts',function ($scope,$state,Restangular,posts) {

	$scope.activeNav = 'posts';
	console.log(posts);
	$scope.posts = posts;
	
}])


.controller('PostDetailsCtrl', ['$scope','post', function($scope,post){
	$scope.post = post;
}])