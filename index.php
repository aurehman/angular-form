<!DOCTYPE html>
<html ng-app="calculateApp">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script src="node_modules/angular/angular.min.js"></script>
<script src="node_modules/angular-animate/angular-animate.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</head>

<body>
<div class="container">
<div class="col-sm-12">
<h1>Calculate Value</h1>
<div ng-controller="formCtrl">

<!--================form Step 1=====================-->
<div ng-hide="step1" class="animate-show">
<form role="form" ng-submit="submitFrmStep1()">
  <div class="form-group">
    <label for="exampleInputEmail1">Turnover</label>
    <input type="number" class="form-control" id="turnover" name="turnover" ng-model="turnover" ng-init="turnover=2800000" min="0" max="8000000000" required>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Net Profit</label>
    <input type="number" class="form-control" id="multiplier" name="nProfit" ng-model="nProfit" ng-init="nProfit=280000" min="0" max="8000000000" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Depreciation/Amortisation</label>
    <input type="number" class="form-control" id="depreciation" name="inputDep" ng-model="depreciation" ng-init="depreciation=2800" min="0" max="8000000000" required>
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Non Recurring Expenses</label>
    <input type="number" class="form-control" id="noRecExp" name="inputnoRecExp" ng-model="noRecExp" ng-init="noRecExp=2800"  min="0" max="8000000000" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Surplus Assets</label>
    <input type="number" class="form-control" id="surplusAssets" name="inputDep" ng-model="surplusAssets" ng-init="surplusAssets=560000" min="0" max="8000000000" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Projected Profits for Next Financial Year</label>
    <input type="number" class="form-control" id="projProfit" name="inputProj" ng-model="projProfit" ng-init="projProfit=56000" min="0" max="8000000000" required>
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Projected Turnover for next financial year</label>
    <input type="number" class="form-control" id="projNextTurnover" name="inputProj" ng-model="projNextTurnover" ng-init="projNextTurnover=2800000" min="0" max="8000000000" required>
  </div>

      <div class="form-group">
    <label for="exampleInputPassword1">Finance Charges</label>
    <input type="number" class="form-control" id="fCharges" name="inputProj" ng-model="fCharges" ng-init="fCharges=28000" min="0" max="8000000000" required>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>




<!--================form Step 2=====================-->
<div ng-show="step2" class="animate-show">
<form role="form" ng-submit="submitFrmStep2()">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="turnover" name="fullName" ng-model="fullName" ng-init="fullName='Test'" required>
    </div>
  <div class="form-group">
    <label for="exampleInputemail">Email</label>
    <input type="email" class="form-control" id="email" name="email" ng-model="email" ng-init="email='test@test.com'" required>
  </div>
  <div class="form-group">
    <label for="exampleInputdepreciation">Phone</label>
    <input type="phonephone" class="form-control" id="phone" name="phonephone" ng-model="phone" ng-init="phone=07540054211"  required>
  </div>
      <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="address" name="address" ng-model="address" ng-init="address='123 test street 2800'"  required>
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<!--================form Step 3=====================-->
<div ng-show="step3" class="animate-show">
<ul class="myValuations">
<li class="fader" ng-repeat="myValuation in myValuations">{{myValuation.title}}: {{myValuation.value | number:0}}</li>
</ul>

<!--<a href="#" class="btn btn-danger" ng-click="reset()">Reset</a> -->

</div>

</div> <!--controller ends-->
</div>
</div>
<p>&nbsp;</p>
</body>
</html>