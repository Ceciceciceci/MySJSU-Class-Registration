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
                
                @foreach (Auth::user()->classesTaught() as $class)
                
                    <table  class="col-md-12 table table-bordered table-striped">
                    <thead >
                    <tr class = "">
                        <th class ="col-md-3">Course</th>
                        <th class ="col-md-3">Course Name</th>
                        <th class ="col-md-3" style = "text-align:center;"><button onclick="genrate()">Genrate Code</button></th>
                        <th class ="col-md-3"> Important info </th>                 
                    </tr>   
                
                <tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$class["subject"]. " " . $class["courseNumber"]}}</td>
                        <td>{{$class["courseName"]}}</td>
                        <td>{{$class["semester"] . ' ' . $class["year"]}}</td>
                        <td></td>
                    </tr>
            </table>
               @endforeach 
           
        </div>
    </div>
@endsection

@section('footer')
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
@endsection