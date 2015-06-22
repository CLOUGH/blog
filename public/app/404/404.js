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