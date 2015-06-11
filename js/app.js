angular.module ('calculateApp', [])
.controller ('formCtrl', ['$scope', function ($scope) {
$scope.step1=false;


	$scope.submitFrmStep1 = function () {
		

		$scope.step1=true;
		$scope.step2=true;
		$scope.step3=true;

		
	};

	$scope.submitFrmStep2 = function () {
		$scope.step2=false;

		var turnover = $scope.turnover;
		var nProfit = $scope.nProfit;
		var depreciation = $scope.depreciation;
		var noRecExp = $scope.noRecExp;
		var surplusAssets = $scope.surplusAssets;
		var projProfit = $scope.projProfit;
		var projNextTurnover = $scope.projNextTurnover;
		var fCharges = $scope.fCharges;

		var avgProfit = (nProfit + projProfit) / 2;
		var businessVal = avgProfit + noRecExp + depreciation + fCharges;

		var lowerQVal = (businessVal * 3) + surplusAssets;
		var lowerMidQVal = (businessVal * 5) + surplusAssets;
		var midRangeVal = (businessVal * 6) + surplusAssets;
		var upperMidQVal = (businessVal * 7) + surplusAssets;
		var upperQVal = (businessVal * 9) + surplusAssets;
		
		$scope.myValuations = 

			[
			{"title": "Lower quartile value", "value": lowerQVal},
			{"title": "Lower mid-quartile value", "value": lowerMidQVal},
			{"title": "Mid-range value", "value": midRangeVal},
			{"title": "Upper Value One", "value": upperMidQVal},
			{"title": "Upper mid-quartile value", "value": upperMidQVal},
			{"title": "Upper quartile value", "value": upperQVal}
			];
	};

}]);


