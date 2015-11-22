@extends('base')

@section('navbar-right')
    <ul class="nav navbar-nav navbar-right">
        <li><a href="" style="color: white">John Doe | Sign out</a></li>
    </ul>
@endsection

@section('main')
    <div class="row mysjsu-main-row">
        <div class="col-sm-3">
            <h4 class="lead">Quick Links</h4>
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li class="active">
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
                <li>
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
            <!--Beginning of NG-Filter-->
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.4/angular-filter.min.js"></script>
            <div ng-app="search" ng-controller="mainController">

              {{--<div class="alert alert-info">--}}
                {{--<p>Sort Type: [[ sortType ]]</p>--}}
                {{--<p>Sort Reverse: [[ sortReverse ]]</p>--}}
                {{--<p>Search Query: [[ searchClass ]]</p>--}}
              {{--</div>--}}

              <form class="form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter class information here" ng-model="searchClass">
                </div>
              </form>

              <div ng-repeat="(key, value) in class | orderBy:sortType:sortReverse | filter:searchClass | groupBy: 'courseName1'" >
                <p> [[key]] </p>
                <table class="table table-bordered table-striped">

                  <thead>
                    <tr>
                      <td>
                        <a href="javascript:void(0)" ng-click="sortType = 'section1'; sortReverse = !sortReverse">
                          Section ID
                          <span ng-show="sortType == 'section1' && !sortReverse" class="fa fa-caret-down"></span>
                          <span ng-show="sortType == 'section1' && sortReverse" class="fa fa-caret-up"></span>
                        </a>
                      </td>
                      <td>
                        <a href="javascript:void(0)" ng-click="sortType = 'courseid'; sortReverse = !sortReverse">
                        Course ID
                          <span ng-show="sortType == 'courseid' && !sortReverse" class="fa fa-caret-down"></span>
                          <span ng-show="sortType == 'courseid' && sortReverse" class="fa fa-caret-up"></span>
                        </a>
                      </td>
                      <td>
                        <a href="javascript:void(0)" ng-click="sortType = 'professor'; sortReverse = !sortReverse">
                        Professor
                          <span ng-show="sortType == 'professor' && !sortReverse" class="fa fa-caret-down"></span>
                          <span ng-show="sortType == 'professor' && sortReverse" class="fa fa-caret-up"></span>
                        </a>
                      </td>
                      <td>
                        <a href="javascript:void(0)" ng-click="sortType = 'room'; sortReverse = !sortReverse">
                          Room Number and Time
                          <span ng-show="sortType == 'room' && !sortReverse" class="fa fa-caret-down"></span>
                          <span ng-show="sortType == 'room' && sortReverse" class="fa fa-caret-up"></span>
                        </a>
                      </td>
                    </tr>
                  </thead>

                  <tbody>
                    <tr ng-repeat="roll in value | orderBy:sortType:sortReverse | filter:searchClass">
                      <!-- <td>[[roll.courseId]]</td> -->
                        <td>[[roll.courseId1.courseSection]]</td>
                        <td>[[roll.courseId1.subject]] [[roll.courseId1.courseNumber]]</td>
                        <td>[[roll.courseId1.instructor ]]</td>
                        <td>[[roll.courseId1.meeting]]</td>
                    </tr> 
                  </tbody>

                </table>
                <br />
              </div>

            </div>
            
            <script>
                var search = angular.module('search', ['angular.filter']);
                search.config(function ($interpolateProvider) {
                    $interpolateProvider.startSymbol('[[');
                    $interpolateProvider.endSymbol(']]');
                })
                search.controller('mainController', function($scope, $http) {
                  $scope.sortType     = 'courseid'; // set the default sort type
                  $scope.sortReverse  = false;  // set the default sort order
                  $scope.searchClass   = '';     // set the default search/filter term

                  $http.get('/index.php/api?data=courses')
                  .success(function(response) {

                      var groups = [];
                      var json = response["courses"];

                      //console.log(json);
                      
                      for(var i = 0; i < json.length; i++) {
                        var obj = json[i];
                        var result = {};
                        result.courseSection = obj["class"];
                        result.courseNumber = obj.subject + " " + obj.courseNumber;
                        result.courseName = obj.courseName;
                        result["type"] = obj.section1 + " " + obj.section2;
                        result.days = obj.days;
                        result.meeting = obj.room + " " + obj.startTime + " - " + obj.endTime;
                        result.instructor = obj.instructor;

                        groups.push({
                          courseId1 : result,
                          courseName1 : result.courseName
                        });
                      }

                      // create the list of class rolls
                      $scope.class = groups;

                  });
                });
            </script>
            <!--End of NG-Filter-->
            <br />
        </div>
    </div>
@endsection