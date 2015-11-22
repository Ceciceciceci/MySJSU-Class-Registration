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
            <div class="form">
                <input type="text" class="form-control" placeholder="Angular Search ngFilter">
            </div>
            <br />

            <h4 class="lead">Mathematics</h4>
            <hr />
            <table class="table">
                <thead>
                <tr>
                    <th>Course</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Grade Received</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->subject . ' ' . $course->courseNumber }}</td>
                        <td>{{ $course->courseName }}</td>
                        <td>{{ $course->instructor }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br />
        </div>
    </div>
@endsection