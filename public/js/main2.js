
var app = angular.module('app', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

app.controller('questionController', function($scope, $http) {


	$scope.questions = [];
	$scope.historiques = [];
	$scope.loading = false;

	$scope.init = function() {
		$scope.loading = true;
		$http.get('/api/v1/questions').
		success(function(data, status, headers, config) {
			$scope.questions = data;
			$scope.loading = false;

		});
	}



	$scope.addTodo = function() {
				$scope.loading = true;

		$http.post('/api/v1/historiques', {

			id: $scope.historique.id,
			user_id: '2',
			question_id: '8',
			user_resulat: $scope.historique.user_resulat

		}).success(function(data, status, headers, config) {
			$scope.historiques.push(data);
			$scope.historique = '';
				$scope.loading = false;

		});
	};



	$scope.init();

});
