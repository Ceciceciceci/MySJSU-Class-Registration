<head>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />

</head>
@extends('base')

@section('navbar-right')
    @if(Auth::check())
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="javascript:void(0)" style="color: white;cursor: default;">{{ Auth::user()->name }}</a>
        </li>
        <li>
            <a href="{{ action('SiteController@logout') }}" class="sjsu-secondary" style="color: white;">Sign out</a>
        </li>
    </ul>
    @endif
@endsection

@section('main')
    <div class="row mysjsu-main-row">
        <div class="col-sm-3">
            <h4 class="lead">Quick Links</h4>
            <hr />
            <ul class="nav nav-stacked">
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
            <h4 class="lead">Alerts</h4>
            <hr />
            <p class="alert alert-info text-center">You have no alert</p>
            <br />

            <h4 class="lead">Courses I've Taken</h4>
            <hr />
            @if(Auth::user()->classesTaken())
                <table class="table">
                    <thead>
                    <tr>
                        <th>Course</th>
                        <th>Course Name</th>
                        <th>Semester</th>
                        <th>Grade Received</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(Auth::user()->classesTaken() as $class)
                        @if($class["grade"][0] === "-")
                        <tr class="default">
                        @elseif($class["grade"][0] === "A")
                        <tr class="success">
                        @elseif($class["grade"][0] === "B")
                        <tr class="info">
                        @elseif($class["grade"][0] === "C")
                        <tr class="warning">
                        @else
                        <tr class="danger">
                        @endif

                            <td>{{$class["subjectNumber"]}}</td>
                            <td>{{$class["courseName"]}}</td>
                            <td>{{$class["semester"]}}</td>
                            <td>{{$class["grade"]}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p class="alert alert-info text-center">You have not taken any courses yet</p>
            @endif
            {{--<a href=""><p class="text-right">more</p></a>--}}
            <br />

            <h4 class="lead">Student Balance</h4>
            <hr />
            <p class="alert alert-info text-center">You have no outstanding balance</p>
        </div>
    </div>
@endsection