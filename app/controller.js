(function() {
	'use strict';
	// $scope.updatebutton = true;
	angular.module('myApp', []).controller('AppCtrl', function($scope, $http) {
		$scope.buttonMsg = 'Save';
		$scope.updateBtnDisabled = true;
		console.log('hello');
		$scope.displayRecord = function() {
			$http.get('select.php').success(function(response) {
				$scope.contactlist = response;
			})
		}

		$scope.displayRecord();

		$scope.insertData = function() {
			console.log('insertdata', $scope.contact)
			if ($scope.buttonMsg == 'Save') {
				$http.post('insert.php', {
					'name': $scope.contact.name,
					'email': $scope.contact.email,
					'number': $scope.contact.number,
					'btnName': $scope.buttonMsg
				}).success(function(response) {
					$scope.msg = 'Data Inserted';
					console.log('hello')
					$scope.displayRecord();
				})
			}
			resetField();
		};

		$scope.update = function(contact) {
					$scope.updateBtnDisabled = !$scope.updateBtnDisabled;

			console.log('updateing........', $scope.editId);
			$http.post('insert.php', {
				'name': contact.name,
				'id': $scope.editId,
				'email': contact.email,
				'number': contact.number,
				'btnName': $scope.buttonMsg
			}).success(function(response) {
				$scope.msg = 'Data updated';
				console.log('hello')
				$scope.displayRecord();
			})
			resetField();
		};

		function resetField() {
			$scope.contact.name = '';
			$scope.contact.email = '';
			$scope.contact.number = '';
		};

		$scope.remove = function(id) {
			console.log('id', id)
			$http.post('delete.php', {
				'id': id
			}).success(function(data) {
				$scope.msg = 'data deleted successfully';
				$scope.displayRecord();
			})
		};

		$scope.edit = function(contact) {
			$scope.updateBtnDisabled = false;
			console.log('ocntact in edit', contact);
			$scope.editId = contact.id;
			$scope.contact = {};
			$scope.buttonMsg = 'Update';
			$scope.msg = '';
			console.log('contact', contact);
			console.log('$scope.contact.name ', $scope.contact.name);
			$scope.contact.name = contact.name;
			// $scope.contact.id =contact.id;
			$scope.contact.email = contact.email;
			$scope.contact.number = contact.number;
		};
	});
})();