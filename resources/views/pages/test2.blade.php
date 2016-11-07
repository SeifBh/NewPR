<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular-resource.min.js"></script>  


<script type="text/javascript" src="/js/angular.min.js"></script>

<script type="text/javascript" src="/js/main2.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!--AngularJS-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>

  <div class="container" ng-app="itemApp" ng-controller="questionsController">
        <div class="row">
           <ul>
                <li ng-repeat="question in questions"> <% questions.content %></li>
           </ul>
        <button class="btn btn-success" ng-click="loadMore()">Load More</button>
 
        </div>
    </div>
 
 
    <script>
        var itemApp = angular.module('itemApp', [], function($interpolateProvider) {
            $interpolateProvider.startSymbol('<%');
            $interpolateProvider.endSymbol('%>');
        });
 
        itemApp.controller('questionsController', function($scope, $http) {
 
            $scope.questions = [];
            $scope.lastpage=1;
 
            $scope.init = function() {
                $scope.lastpage=1;
                $http({
                    url: '/api/v1/questions',
                    method: "GET",
                    params: {page:  $scope.lastpage}
                }).success(function(data, status, headers, config) {
                    $scope.questions = data.data;
                    $scope.currentpage = data.current_page;
                });
            };
 
            $scope.init();
 
        });
 
    </script>
