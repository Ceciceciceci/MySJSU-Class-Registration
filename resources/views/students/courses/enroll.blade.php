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
            <h4 class="lead">
                @if ($errors->has())

                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger text-center small">
                            {{ $error}}
                        </p>
                    @endforeach

                @endif
                Spring 2016 Shopping Cart
                <a href="{{action('CoursesController@enrollAll')}}" class="btn btn-success pull-right">Enroll All</a>
            </h4>
            <hr />
            @if(Auth::user()->cart->isEmpty())
                <p class="alert alert-info text-center">Your shopping cart is empty.</p>
            @else
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Course</th>
                        <th>Instructor</th>
                        <th>Meeting Days & Time</th>
                        <th>Enrolled</th>
                        <th>Waitlist</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(Auth::user()->cart as $class)
                        <tr>
                            <td>{{ $class->subject . $class->courseNumber . ' - ' . $class->courseName}}</td>
                            <td>{{ $class->instructor }}</td>
                            <td>{{ $class->meetingTime() }}</td>
                            <td>{{ $class->totalEnrolled() . '/35' }}</td>
                            <td>{{ $class->totalWaitlisted() . '/15' }}</td>
                            <td class="text-center"><a href="{{ action('CoursesController@removeFromCart', ['course_id' => $class->id]) }}">delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection