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