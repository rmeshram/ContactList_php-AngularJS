<!DOCTYPE>
<html ng-app="myApp">
<head>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>

<!-- Optional theme -->
<link rel="stylesheet" href="bower/bootstrap/dist/css/bootstrap-theme.min.css">

  <title>Contact List App</title>
</head>
<body>
  <div class="container" ng-controller="AppCtrl">
    <h1 style= " font-family: 'Comfortaa', cursive;
  ">Contact List App</h1>

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>         
          <th>Email</th>
          <th>Number</th>
          <th>Action</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input class="form-control" ng-model="contact.name"></td>
          <td><input class="form-control" ng-model="contact.email"></td>
          <td><input class="form-control" ng-model="contact.number"></td>
          <td><input type="button" ng-click="insertData()" value="Save" class="btn btn-success" ng-disabled="!updateBtnDisabled"></td>
          <td><input type="button" ng-click="update(contact)" value="Update" class="btn btn-success"  ng-disabled="updateBtnDisabled"></td>

          <!-- <td><button class="btn btn-info" ng-click="update()">Update</button>&nbsp;&nbsp;<button class="btn btn-info" ng-click="deselect()">Clear</button></td> -->
        </tr>
        <tr ng-repeat="contact in contactlist">
          <td>{{contact.name}}</td>
          <td>{{contact.email}}</td>
          <td>{{contact.number}}</td>
          <td><button class="btn btn-danger" ng-click="remove(contact.id)">Remove</button></td>
          <td><button class="btn btn-warning" ng-click="edit(contact)">Edit</button></td>

        </tr>
      </tbody>
    </table>

  </div>
<script src="bower/angular/angular.min.js"></script>
<script src="controller.js"></script>
</body>
</html>