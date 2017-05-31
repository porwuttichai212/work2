.controller('AppCtrl',function ($scope,$state,$ionicPopup){

	$scope.login={};
	var user="admin";
	var password="123456";
	$scope.doLogin=function(){
		console.log("alert");
		console.log(password);
		console.log($scope.login.username);
		console.log($scope.login.password);
		if ($scope.login.username == 'admin' && $scope.login.password == '123456') {
		console.log('success');
		$scope.showAlertSuccess();
		$state.go('history')
    }else{
		console.log('invalid');
		$scope.showAlertFail();
		$state.go('login')
    }
	};
 
  $scope.showAlertFail = function() {
	   var alertPopup = $ionicPopup.alert({
		 title: 'Login Fail!',
		 template: 'Invalid Username and Password '
	   });
  };
$scope.showAlertSuccess = function() {
	   var alertPopup = $ionicPopup.alert({
		 title: 'Login Success!',
		 template: 'Welcome Back: "'+ $scope.login.username + $state.go('history')
	   });
	   $scope.modal.hide();
  };

  
  //$state.go('history')
		
	
})
