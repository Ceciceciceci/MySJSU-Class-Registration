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
                    <a href="{{ action('CoursesController@addCode') }}">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Add Codes
                    </a>
                </li>
            </ul>
            <hr />
        </div>
        <div class="col-sm-9">
            <h4 class="lead">Enrolled Students </h4>
            <hr />
            <table class ="table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <center><th>Remove</th></center>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($class->enrolledStudents() as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>
                      <a href="#">
                          <span class="glyphicon glyphicon-remove"></span>
                      </a>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>

        </div>
    </div>
@endsection