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
                <div class="panel-body text-center">
                    <canvas id="line" height="300" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript" src="{{ URL::asset('js/Chart.min.js') }}"></script>
    <script>
        var url = '/index.php/api?data=gpa&student_id=' + {{ Auth::user()->id }}
        var data;
        $.ajax(url, {
            success: function(ret) {
                data = ret;
            },
            async: false
        });

        var lineChartData = {
            labels : data.semesters,
            datasets : [{
                data : data.gpa,
                fillColor : "rgba(0, 0, 0, 0)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff"
            }]
        };

        Chart.types.Line.extend({
            name: "LineAlt",
            initialize: function(data){
                Chart.types.Line.prototype.initialize.apply(this, arguments);
                this.eachPoints(function(point, index){
                    Chart.helpers.extend(point, {
                        x: this.scale.calculateX(0),
                        y: this.scale.calculateY(point.value)
                    });
                    point.save();
                }, this);
            }
        });

        var Script = new Chart(document.getElementById("line").getContext("2d")).LineAlt(lineChartData);
    </script>
@endsection