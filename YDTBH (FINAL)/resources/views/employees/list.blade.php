@extends('layouts.master')
@section('title', 'Employees List')

@section('content')

<script>
     var app = angular.module('EmployeeListModule', []);
            var controller = app.controller('EmployeeListController', ($scope, $http) => {
                $scope.employees = new Array();

                angular.element(document).ready(() => {
                    $scope.getEmployees();
                });

                $scope.getEmployees = () => {
                    $http.get('/employees').then((result) => {
                        $scope.employees = result.data;
                    })
                }

                $scope.deleteEmployee = (id) => {
                    $http.delete(`/employees/${id}`).then((result) => {
                        $scope.getEmployees();
                        
                    })
                }
            });
</script>



<div ng-app="EmployeeListModule" ng-controller="EmployeeListController">
    <h2>Employee List</h2>
    <a href="newemployee" class="btn btn-primary">New Employee</a>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    First name
                </th>
                <th>
                    Last name
                </th>
                <th>
                    Birth date
                </th>
                <th>
                    City
                </th>
                <th>
                    Address
                </th>
                <th>
                    Photo
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="employee in employees">
                        <td>
                            @{{ employee.id }}
                        </td>
                        <td>
                            @{{ employee.firstName }}
                        </td>
                        <td>
                            @{{ employee.lastName }}
                        </td>
                        <td>
                            @{{ employee.birthDate }}
                        </td>
                        <td>
                            @{{ employee.city }}
                        </td>
                        <td>
                            @{{ employee.address }}
                        </td>
                        <td>
                            @{{ employee.photo }}
                        </td>
                        <td>
                            <a href="@{{ '/editemployee/' + employee.id }}" class="btn btn-primary">Edit</a>
                        </td>

                        <td>
                            <button type="button" ng-click="deleteEmployee(employee.id)" class="btn btn-danger">Delete</button>
                        </td>
                        
            </tr>
        </tbody>
    </table>
</div>
@stop