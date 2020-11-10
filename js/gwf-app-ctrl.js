"use strict";
angular.module('gdo6-material').
controller('GDOAppCtrl', function($scope, $mdSidenav, $mdDialog) {
	$scope.data = {}
	$scope.init = function() {
		console.log('GDOAppCtrl.init()');
		$scope.data.topMenu = { title: 'GDOv6' };
		$scope.data.leftMenu = { enabled: true };
		$scope.data.rightMenu = { enabled: true };
		$scope.inited();
	}
	$scope.inited = function() {
		console.log('GDOAppCtrl.inited()');
	};
	
	$scope.openLeft = function() { $mdSidenav('left').open(); };
	$scope.closeLeft = function() { $mdSidenav('left').close(); };
	$scope.openRight = function() { $mdSidenav('right').open(); };
	$scope.closeRight = function() { $mdSidenav('right').close(); };
	
	$scope.showDialogId = function(id, ev) {
		console.log('GDOAppCtrl.showDialogId()', id, ev);
		$mdDialog.show({
			contentElement: id,
			parent: angular.element(window.document.body),
			targetEvent: ev,
			clickOutsideToClose: true
		});
	};
	
	$scope.alert = function(msg) {
		window.alert(msg);
	};
	
	$scope.log = function(obj) {
		console.log(obj);
	};

	$scope.init();
});