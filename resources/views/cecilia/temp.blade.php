<!DOCTYPE html>
<html>
    <!--**********************************************************************************************
    *******************************D A S H B O A R D   P A G E ***************************************
    ***********************************************************************************************-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">

        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/style-responsive.css') }}" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        
    <script type="text/javascript" src="{{ URL::asset('js/Chart.min.js') }}"></script>
    </head>

    <body>

    <section id="container" >
        <!--header-->
        <header class="header black-bg">
            <!--title start-->
            <a href="index.html" class="title"><b>MySJSU</b></a>
            <!--title end-->
            <div class="top-menu">
                <!--careless whisper-->
                <!--shhh...-->
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <!--**********************************************************************************************
        ******************************************* S I D E B A R ***************************************
        ***********************************************************************************************-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                   <center><img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/27/San_Jose_State_Spartans_Logo.svg/325px-San_Jose_State_Spartans_Logo.svg.png" style="width:30%; height:30%;"></center>
                    <h5 class="centered">
                        Welcome, <br><br>
                        SJSU Student Name</h5>

                    <li class="mt">
                        <a class="active" href="{{ action('StudentsController@index') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ action('CoursesController@index') }}" >
                            <i class=""></i>
                            <span>Search Classes</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ action('CoursesController@plan') }}" >
                            <i class=""></i>
                            <span>Plan</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{ action('CoursesController@enroll') }}" >
                            <i class=""></i>
                            <span>Enroll</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="{{ action('StudentsController@academics') }}" >
                            <i class=""></i>
                            <span>My Academics</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--**********************************************************************************************
        *******************************M I D D L E   S E C T I O N ***************************************
        ***********************************************************************************************-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                    <div class="col-lg-9 main-chart"  style="padding-top: 20px;">
                        <h1>CURRENT CLASSES</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Section</th>
                                <th>Class</th>
                                <th>Room</th>
                                <th>Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>CS 174</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>CS 151</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CS 157B</td>
                                <td>MQH 232</td>
                                <td>6:00 - 7:15 AM</td>
                            </tr>
                            </tbody>
                        </table>
                        
                        
                      
    </div><!-- /col-lg-9 END SECTION MIDDLE -->


                    <!--**********************************************************************************************
                    *******************************R I G H T   S I D E B A R ***************************************
                    ***********************************************************************************************-->

                    <div class="col-lg-3 ds">
                        <!-- PUT WHATEVER YA WANT HERE -->
                        <h3>NOTIFICATIONS</h3>
                        <br><br>
                        
                        <!--<div class="col-lg-6">-->
                          <div class="content-panel">
							  <h4><i class="fa fa-angle-right"></i> GPA Chart</h4>
                              <div class="panel-body text-center">
                                  <canvas id="line" height="300" width="200"></canvas>
                              </div>
                          </div>
                        <!--</div>-->
                        
                        My fake plants died because I did not pretend to water them.
                        <br><br><br>
                    </div><!-- /col-lg-3 -->
                </div><!--/row -->
            </section>
        </section>
        <!--main content end-->

        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                (c) SJSU
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- ******************* JAVASCRIPT ****************** -->
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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    <!-- ************** END OF JAVASCRIPT *************** -->
    </body>
</html>
