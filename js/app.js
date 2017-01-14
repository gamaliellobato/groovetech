 var app = angular.module('grooveApp',[]);

 app.controller('mainCtrl', ['$scope', function($scope){
 	$scope.menu = "includes/menu.html";
 	$scope.footer = "includes/footer.html";
 }]);