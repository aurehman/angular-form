angular.module ('calculateApp', [])
.controller ('formCtrl', ['$scope', function ($scope) {

var lowerMulti = 3;
var upperMulti = 7;


	$scope.submitFrm = function () {
		var turnover = $scope.turnover;
		var nProfit = $scope.nProfit;
		var depreciation = $scope.depreciation;
		var noRecExp = $scope.noRecExp;
		var shareFunds = $scope.shareFunds;
		var projProfit = $scope.projProfit;

		var avgProfit = (nProfit + projProfit) / 2;
		//$scope.avgProfit = avgProfit;

		var businessVal = avgProfit + noRecExp + depreciation;
		//$scope.businessVal = businessVal;

		var lowerValOne = businessVal * 3;
		//$scope.lowerValOne = lowerValOne;

		var upperValOne = businessVal * 7;
		//$scope.upperValOne = upperValOne;


		var lowerValTwo = lowerValOne + shareFunds;
		//$scope.lowerValTwo = lowerValTwo;

		var upperValTwo = upperValOne + shareFunds;
		//$scope.upperValTwo = upperValTwo;

		$scope.myValuations = 
			[
			{"title": "Average Profit", "value": businessVal},
			{"title": "Business Value", "value": businessVal},
			{"title": "Lower Value One", "value": lowerValOne},
			{"title": "Upper Value One", "value": upperValOne},
			{"title": "Lower Value Two", "value": lowerValTwo},
			{"title": "upperValTwo", "value": upperValTwo}
			];
		


	};


}]);