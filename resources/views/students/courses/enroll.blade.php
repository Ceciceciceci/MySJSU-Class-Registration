@extends('base')

@section('navbar-right')
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="javascript:void(0)" style="color: white;cursor: default;">{{ Auth::user()->name }}</a>
        </li>
        <li>
            <a href="{{ action('SiteController@logout') }}" class="sjsu-secondary" style="color: white;">Sign out</a>
        </li>
    </ul>
@endsection

@section('main')
    <div class="row mysjsu-main-row">
        <div class="col-sm-3">
            <h4 class="lead">Quick Links</h4>
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="{{ action('CoursesController@index') }}">
                        <i class="glyphicon glyphicon-search"></i>
                        Search Classes
                    </a>
                </li>
                <li>
                    <a href="{{ action('CoursesController@plan') }}">
                        <i class="glyphicon glyphicon-edit"></i>
                        Plan
                    </a>
                </li>
                <li class="active">
                    <a href="{{ action('CoursesController@enroll') }}">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Enroll
                    </a>
                </li>
                <li>
                    <a href="{{ action('StudentsController@academics') }}">
                        <i class="glyphicon glyphicon-education"></i>
                        Academics
                    </a>
                </li>
            </ul>
            <hr />
        </div>
        <div class="col-sm-9">
            <br />
            <!--***********************************************************************************
            **************************START  OF NG FILTER********************************************
            *************************************************************************************-->
            {{--<div ng-app="main" ng-controller="mainController">--}}

              {{--<div class="alert alert-info">--}}
                {{--<p>Sort Type: [[ sortType ]]</p>--}}
                {{--<p>Sort Reverse: [[ sortReverse ]]</p>--}}
                {{--<p>Search Query: [[ searchClass ]]</p>--}}
              {{--</div>--}}

              {{--<form>--}}
                {{--<div class="form-group">--}}
                  {{--<div class="input-group">--}}
                    {{--<div class="input-group-addon"><i class="fa fa-search"></i></div>--}}
                    {{--<input type="text" class="form-control" placeholder="Search for ya classes" ng-model="searchClass">--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</form>--}}

              {{--<table class="table table-bordered table-striped">--}}

                {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<td>--}}
                      {{--<a href="#" ng-click="sortType = 'courseid'; sortReverse = !sortReverse">--}}
                        {{--Course ID--}}
                        {{--<span ng-show="sortType == 'courseid' && !sortReverse" class="fa fa-caret-down"></span>--}}
                        {{--<span ng-show="sortType == 'courseid' && sortReverse" class="fa fa-caret-up"></span>--}}
                      {{--</a>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                      {{--<a href="#" ng-click="sortType = 'coursename'; sortReverse = !sortReverse">--}}
                      {{--Course Name--}}
                        {{--<span ng-show="sortType == 'coursename' && !sortReverse" class="fa fa-caret-down"></span>--}}
                        {{--<span ng-show="sortType == 'coursename' && sortReverse" class="fa fa-caret-up"></span>--}}
                      {{--</a>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                      {{--<a href="#" ng-click="sortType = 'professor'; sortReverse = !sortReverse">--}}
                      {{--Professor--}}
                        {{--<span ng-show="sortType == 'professor' && !sortReverse" class="fa fa-caret-down"></span>--}}
                        {{--<span ng-show="sortType == 'professor' && sortReverse" class="fa fa-caret-up"></span>--}}
                      {{--</a>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                      {{--<a href="#" ng-click="sortType = 'room'; sortReverse = !sortReverse">--}}
                        {{--Room Number and Time--}}
                        {{--<span ng-show="sortType == 'room' && !sortReverse" class="fa fa-caret-down"></span>--}}
                        {{--<span ng-show="sortType == 'room' && sortReverse" class="fa fa-caret-up"></span>--}}
                      {{--</a>--}}
                    {{--</td>--}}
                  {{--</tr>--}}
                {{--</thead>--}}

                {{--<tbody>--}}
                  {{--<tr ng-repeat="roll in class | orderBy:sortType:sortReverse | filter:searchClass">--}}
                    {{--<td>[[ roll.class ]]</td>--}}
                    {{--<td>[[ roll.coursename ]]</td>--}}
                    {{--<td>[[ roll.professor ]]</td>--}}
                    {{--<td>[[ roll.room ]]</td>--}}
                  {{--</tr>--}}
                {{--</tbody>--}}

              {{--</table>--}}

            {{--</div>--}}
            {{----}}
            {{--<script>--}}
                {{--angular.module('main', [])--}}
                {{--.config(function ($interpolateProvider) {--}}
                    {{--$interpolateProvider.startSymbol('[[');--}}
                    {{--$interpolateProvider.endSymbol(']]');--}}
                {{--})--}}
                {{--.controller('mainController', function($scope, $http) {--}}
                  {{--$scope.sortType     = 'courseid'; // set the default sort type--}}
                  {{--$scope.sortReverse  = false;  // set the default sort order--}}
                  {{--$scope.searchClass   = '';     // set the default search/filter term--}}

                  {{--$http.get('/index.php/api?data=courses')--}}
                  {{--.success(function(response) {--}}
                      {{--// create the list of class rolls--}}
                      {{--$scope.class = response["courses"];--}}
                  {{--});--}}
                {{--});--}}
            {{--</script>--}}
            
            <!--***********************************************************************************
            **************************END OF NG FILTER********************************************
            *************************************************************************************-->
            
            <h4 class="lead">Spring 2016 Shopping Cart</h4>
            <hr />
            <table class="table">
                <thead>
                <tr>
                    <th>Course</th>
                    <th>Course courseid</th>
                    <th>Instructor</th>
                    <th>Grade Received</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>CS 49J</td>
                    <td>Introduction to Java</td>
                    <td>Frank Butt</td>
                    <td>A+</td>
                </tr>
                <tr>
                    <td>CS 46B</td>
                    <td>Introduction to CS Part II</td>
                    <td>Frank Butt</td>
                    <td>A+</td>
                </tr>
                <tr>
                    <td>CS 49C</td>
                    <td>Introduction to C Programming</td>
                    <td>Frank Butt</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>CS 46A</td>
                    <td>Introduction to CS Part I</td>
                    <td>Frank Butt</td>
                    <td>F</td>
                </tr>
                </tbody>
            </table>
            
        </div>
    </div>
@endsection