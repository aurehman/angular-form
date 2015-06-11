<!DOCTYPE html>
<html ng-app="calculateApp">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
<script src="node_modules/angular-animate/angular-animate.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</head>

<body>
<div class="container">
<div class="col-sm-12">
<form role="form" ng-submit="submitFrmStep2()">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="number" class="form-control" id="turnover" name="turnover[val]" ng-model="turnover.val" ng-init="turnover.val=2800000" min="0" max="8000000000" required>
    </div>
  <div class="form-group">
    <label for="exampleInputemail">Email</label>
    <input type="number" class="form-control" id="multiplier" name="nProfit" ng-model="nProfit" ng-init="nProfit=280000" min="0" max="8000000000" required>
  </div>
  <div class="form-group">
    <label for="exampleInputdepreciation">Phone</label>
    <input type="number" class="form-control" id="depreciation" name="inputDep" ng-model="depreciation" ng-init="depreciation=2800" min="0" max="8000000000" required>
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="number" class="form-control" id="noRecExp" name="inputnoRecExp" ng-model="noRecExp" ng-init="noRecExp=2800"  min="0" max="8000000000" required>
  </div>


<ul class="myValuations">
<li class="fader" ng-repeat="myValuation in myValuations">{{myValuation.title}}: {{myValuation.value | number:0}}</li>
</ul>
 
  {{showVal}}
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</body>
</html>