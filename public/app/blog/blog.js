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