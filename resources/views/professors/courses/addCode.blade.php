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
                    <a href="{{ action('ProfessorsController@index') }}">
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

            <table  class="col-md-12 table table-bordered table-striped">
                <thead >
                <tr class = "">
                    <th class ="col-md-3">Course</th>
                    <th class ="col-md-3">Course Name</th>
                    <th class ="col-md-3" style = "text-align:center;"><button onclick="genrate()">Genrate Code</button></th>
                    <th class ="col-md-3"> Important info </th>

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
                        <td>Cs 46b</td>
                            <td>Data structure</td>
                        <td>
                            <div align="center"  id= "genrateCode">
                                <p id="demo">   </p> 
                             
                            </div>
                        </td>

                        <td> <div>
                           

                        </div>
                        </td>
                      
                    </tr>

             
                </tbody>
            </table>

            <table  class="col-md-3 table table-bordered table-striped">
                <thead >
                <tr>
                    <th class ="col-md-3">Course</th>
                    <th class ="col-md-3">Course Name</th>
                    <th class ="col-md-3" style = "text-align:center;"><button onclick="genrate2()">Genrate Code</button></th>
                    <th class ="col-md-3"> Important info </th>

                    <script>

                        var a =  1;

                        var code = 10000;

                        var code1 = "<br>";
                        
                        function genrate2 (e) {     

                            document.getElementById("demo1").innerHTML += code + "<br>";


                            code = code + a;

                            return false;

                        }
                    </script>
                    
                </tr>
                </thead>
                <tbody>
             
                    <tr>
                        <td>Cs 49J</td>
                            <td>Java programming</td>
                        <td>
                            <div align="center"  id= "genrateCode">
                                <p id="demo1">   </p> 
                             
                            </div>
                        </td>

                        <td> <div>
                            

                        </div>
                        </td>
                      
                    </tr>

             
                </tbody>
            </table>
           
        </div>
    </div>
@endsection