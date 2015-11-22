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
                <li class="active">
                    <a href="{{ action('StudentsController@academics') }}">
                        <i class="glyphicon glyphicon-education"></i>
                        Academics
                    </a>
                </li>
            </ul>
            <hr />
        </div>
        <div class="col-sm-9">
            <div class="content-panel">
                              <h4><i class="fa fa-angle-right"></i> GPA Chart</h4>
                              <div class="panel-body text-center">
                                  <canvas id="line" height="300" width="600"></canvas>
                              </div>
                          </div>
            
            
            <script type="text/javascript" src="{{ URL::asset('js/Chart.min.js') }}"></script>
            <script>  
    var Script = function () {
        var lineChartData = {
            labels : ["Sem 1","Sem 2","Sem 3","Sem 4","Sem 5","Sem 6","Sem 7"],
            datasets : [
                {
                    data : [3.5,4.0,4.0,3.5,3.75,3.2,4.0],
                    fillColor : "rgba(151,187,205,0.5)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff"
                }
            ]

        };
         new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
        }();
    </script>
        </div>

        
    </div>
@endsection