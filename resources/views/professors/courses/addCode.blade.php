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
                    <a href="">
                        <i class="glyphicon glyphicon-home"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ action('CoursesController@index') }}">
                        <i class="glyphicon glyphicon-search"></i>
                        Search Classes
                    </a>
                </li>
                <li class="active">
                    <a href="{{ action('CoursesController@addCode') }}">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Add Codes
                    </a>
                </li>
            </ul>
            <hr />
        </div>
        <div class="col-sm-9">

            <h4 class="lead">Genrate Add Code</h4>
            <hr />

            <table  class="table table-bordered table-striped">
                <thead >
                <tr>
                    
                    <th style = "text-align:center;"><button onclick="genrate()">Genrate Code</button></th>
                    <th> Important info </th>

                    <script>

                        var a =  1;

                        var code = 10000;

                        var code1 = "<br>";
                        
                        function genrate (e) {     

                            document.getElementById("demo").innerHTML += code + "<br>";

                            code = code + a;

                            return false;

                        }
                    </script>
                    
                </tr>
                </thead>
                <tbody>
               
                    <tr>
                        
                        <td>
                            <div align="center"  id= "genrateCode">
                                <p id="demo">   </p> 
                             
                            </div>
                        </td>

                        <td> <div>
                            <p> <b> This add code only given by professor to student privately <br>
                                    so no any other student can use this code. Before give add<br> 
                                    code to student just make sure <li>student are not on university
                                    or major probation</li>
                                    <li> Student met all of the pre-requisites </li>
                                    <li>Student are not repeating the course</li>
                                    

                                </b>
                            </p>

                        </div>
                        </td>
                      
                    </tr>

             
                </tbody>
            </table>
           
        </div>
    </div>
@endsection