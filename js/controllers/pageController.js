app.controller('pageCtrl', ['$scope','$http', function($scope,$http){
	$scope.model=[];
	this.getProdList=function(index,$http){
		if($scope.model!=null)
			$scope.model.clear();
		$http.get('').access(function(data){
			$scope.model=data;
		}).error();
	}
}])