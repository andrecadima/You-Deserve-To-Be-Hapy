@extends('layouts.master')
@section('title', 'New Employee')
@section('content')

<script>
    var app = angular.module('EmployeeEditModule', [])
    app.controller('EmployeeEditController', ($scope, $http) => {
        $scope.employee = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]
            $http.get(`/employees/${id}`).then((result) => {
                $scope.employee = result.data
            })
        })
        $scope.putEmployee = () => {
            $http.put('/employees', $scope.employee).then((result) => {
                window.location.href = '/listemployees'
            })
        }
    })
</script>



<form ng-app="EmployeeEditModule" ng-controller="EmployeeEditController">
    <h2>New Employee</h2>
        <div>
            First Name:
            <input type="text" class="form-control" ng-model="employee.firstName">
        </div>

        <div>
            Last Name:
            <input type="text" class="form-control" ng-model="employee.lastName">
        </div>

        <div>
            Birth Date:
            <input type="text" class="form-control" ng-model="employee.birthDate">
        </div>

        <div>
            City:
            <input type="text" class="form-control" ng-model="employee.city">
        </div>

        <div>
            Address:
            <input type="text" ng-model="employee.address" class="form-control">
        </div>

        <div>
            Photo:
            <input type="text" ng-model="employee.photo" class="form-control">
        </div>

        <div>
            User Name:
            <input type="text" class="form-control" ng-model="employee.username">
        </div>

        <div>
            Email:
            <input type="text" class="form-control" ng-model="employee.email">
        </div>

        <div>
            password:
            <input type="password" class="form-control" ng-model="emloyee.password">
        </div>

        <div>
           <button  type="button" ng-click="putEmployee()" class="btn btn-primary">Submit</button>
           <a href="{{ '/listemployees' }}" class="btn btn-primary">Return</a>
        </div>

    </form>
@stop