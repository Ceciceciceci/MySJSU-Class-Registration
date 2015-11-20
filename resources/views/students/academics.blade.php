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
            <canvas id="canvas"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
            <script type="text/javascript">
                var lineData = {
                    labels: ['Data 1', 'Data 2', 'Data 3', 'Data 4',
                        'Data 5', 'Data 6', 'Data 7'],
                    datasets: [{
                        fillColor: 'rgba(0,0,0,0)',
                        strokeColor: 'rgba(220,180,0,1)',
                        pointColor: 'rgba(220,180,0,1)',
                        data: [20, 30, 80, 20, 40, 10, 60]
                    }, {
                        fillColor: 'rgba(0,0,0,0)',
                        strokeColor: 'rgba(151,187,205,1)',
                        pointColor: 'rgba(151,187,205,1)',
                        data: [60, 10, 40, 30, 80, 30, 20]
                    }]
                };

                Chart.defaults.global = {
                    animationSteps : 50,
                    tooltipYPadding : 16,
                    tooltipCornerRadius : 0,
                    tooltipTitleFontStyle : 'normal',
                    tooltipFillColor : 'rgba(0,160,0,0.8)',
                    animationEasing : 'easeOutBounce',
                    scaleLineColor : 'black',
                    scaleFontSize : 16,
                    responsive : true
                };

                var ctx = document.getElementById('canvas').getContext('2d');
                var lineDemo = new Chart(ctx).Line(lineData, {
                    responsive: true,
                    pointDotRadius: 10,
                    bezierCurve: false,
                    scaleShowVerticalLines: false,
                    scaleGridLineColor: 'black'
                });
            </script>
        </div>
    </div>
@endsection