var app = angular.module('postApp', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});
app.controller('postController', function($scope, $http) {
 
	$scope.posts = [];
	$scope.loading = false;
	$scope.test = 'seif';
 
	$scope.init = function() {
		$scope.loading = true;
		$http.get('/api/posts').
		success(function(data, status, headers, config) {
			$scope.posts = data;
			$scope.loading = false;
 
		});
	}
 
	$scope.addPost = function() {
				$scope.loading = true;
 
		$http.post('/api/posts', {
			title: $scope.post.title,
			content: $scope.post.content
					}).success(function(data, status, headers, config) {
			$scope.posts.push(data);
			$scope.post = '';
				$scope.loading = false;
 
		});
	};

  /*
	$scope.updatePost = function(post) {
		$scope.loading = true;
 
		$http.put('/api/posts/' + post.id, {
			title: post.title,
			done: post.done,
			content: post.content,
		}).success(function(data, status, headers, config) {
			post = data;
				$scope.loading = false;
 
		});;
	};

 */
 
	$scope.deletePost = function(index) {
		$scope.loading = true;
 
		var post = $scope.posts[index];
 
		$http.delete('/api/posts/' + post.id)
			.success(function() {
				$scope.posts.splice(index, 1);
					$scope.loading = false;
 
			});;
	};
 
 
	$scope.init();
 
});