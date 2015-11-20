{{--Blade Documentation: http://laravel.com/docs/5.1/blade --}}
<!--@extends('base')-->

@section('main')
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
</head>

<body>

  <section id="container" >
      <!--header-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
            <!--title start-->
            <a href="index.html" class="logo"><b>MySJSU</b></a>
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
                
                  
              	  <h5 class="centered">
                      Welcome, <br><br>
                      SJSU Student Name</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Search Classes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Plan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Enroll</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>My Academics</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
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

              <div class="row">
                  <div class="col-lg-9 main-chart">
                    <table class="table" style="padding-top: 80px;">
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
                      <table class="table" style="padding-top: 80px;">
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
                      <table class="table" style="padding-top: 80px;">
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
                      <table class="table" style="padding-top: 80px;">
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
                      Mmmm right side <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

  </body>
@endsection