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
                    <a href="{{ action('CoursesController@addCode') }}">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Add Codes
                    </a>
                </li>
            </ul>
            <hr />
        </div>
        <div class="col-sm-9">
            <h4 class="lead">Alerts</h4>
            <hr />
            <p class="text-center">There is a problem student in CS 49J Enrolled.</p>
            <br />

            <!--<a href="{{ action('CoursesController@show', 1) }}">link</a>-->
            <h4 class="lead">Courses I Teach</h4>
            <hr />
            <table class="table">
                <thead>
                <tr>
                    <th>Course</th>
                    <th>Course Name</th>
                    <th></th>
                    <th>View Enrolled</th>
                </tr>
                </thead>
                <tbody>
                <tr class="success"> 
                    <td>CS 49J
                    </td>
                    <td>Introduction to Java</td>
                    <td><div class="accordion-inner">Enrolled: [[number]]  <br> Waitlist: [[number]] <br> </div>
                                </div>
                            </div>
                        </div></td>
                    <td> <a href="{{ action('CoursesController@show', 1) }}">More Info</a> </td>
                </tr>
                <tr class="success">
                    <td>CS 46B</td>
                    <td>Introduction to CS Part II</td>
                    <td> <div class="accordion-inner">Enrolled: [[number]]  <br> Waitlist: [[number]]</div>
                                </div>
                            </div>
                        </div></td>
                    <td><a href="{{ action('CoursesController@show', 1) }}">More Info</a></td>
                </tr>
                <tr class="success">
                    <td>CS 49C</td>
                    <td>Introduction to C Programming</td>
                    <td> <div class="accordion-inner">Enrolled: [[number]]  <br> Waitlist: [[number]]</div>
                                </div>
                            </div>
                        </div></td>
                    <td><a href="{{ action('CoursesController@show', 1) }}">More Info</a></td>
                </tr>
                <tr class="success">
                    <td>CS 46A</td>
                    <td>Introduction to CS Part I</td>
                        <td><div class="accordion-inner">Enrolled: [[number]]  <br> Waitlist: [[number]]</div>
                                </div>
                            </div>
                        </div></td>
                    <td><a href="{{ action('CoursesController@show', 1) }}">More Info</a></td>
                </tr>
                </tbody>
            </table> 
            <a href=""><p class="text-right">more</p></a>
            <br />
        </div>
    </div>

<!-- JAVASCRIPT -->
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.4/angular-filter.min.js"></script>
@endsection