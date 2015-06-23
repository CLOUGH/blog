angular.module('app.blog', [
	'ui.router'
])

.config(['$stateProvider',function ($stateProvider) {
	$stateProvider.state('blog',{
		url: '/blog',
		templateUrl: 'app/blog/blog.html',
		controller: 'BlogCtrl',
		data : {

		}
	});
}])

.controller('BlogCtrl', ['$scope', '$state',function ($scope,$state) {

	$scope.activeNav = 'blog';
	
}]);