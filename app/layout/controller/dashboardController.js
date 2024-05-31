angular.module("myApp").controller("dashboardController", ["$scope", "$http", "$window", "$filter", function($scope, $http, $window, $filter){
	
	$scope.dashboardInstance = {};
	$scope.countDashboard= function(){
		$http({
			method: "GET",
			url: PATH+"app/layout/model/?action=countDashboard"
		}).then(function successCallback(response) {
			$scope.dashboardInstance = response.data;
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูลรายวิชา #"+id);
			console.log("dashboardController countDashboard ERROR!!!");
			console.log(error);
		});
	
	};

	$scope.memberInstanceList = [];
	$scope.memberRegister= function(){
		$http({
			method: "GET",
			url: PATH+"app/layout/model/?action=memberRegister"
		}).then(function successCallback(response) {
			$scope.memberInstanceList = response.data.instance;
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูลรายวิชา #"+id);
			console.log("dashboardController countDashboard ERROR!!!");
			console.log(error);
		});
	
	};

	$scope.registerInstanceList = [];
	$scope.regOpen= function(){
		$http({
			method: "GET",
			url: PATH+"app/layout/model/?action=regOpen"
		}).then(function successCallback(response) {
			$scope.registerInstanceList = response.data.instance;
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูลรายวิชา #"+id);
			console.log("dashboardController countDashboard ERROR!!!");
			console.log(error);
		});
	
	};

}]);