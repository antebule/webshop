var shopApp = angular.module("shopApp", []);

shopApp.controller("shopController", function($scope,$http) {
    $scope.sort = "id";
    $scope.searchProduct = "";
    

    $http.get('fetch.php').then(function(response){
        $scope.products = response.data;
        console.log($scope.products)
    })
})