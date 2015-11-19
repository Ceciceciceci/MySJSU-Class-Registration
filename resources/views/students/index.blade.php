@extends('base')

@section('navbar-right')
@endsection

@section('main')
    <div class="row mysjsu-main-row">
        <div class="col-sm-3">
            <h4 class="lead">Quick Links</h4>
            <hr />
            <ul class="nav nav-stacked">
                <li>
                    <a href="">
                        <i class="glyphicon glyphicon-search"></i>
                        Search Classes
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="glyphicon glyphicon-edit"></i>
                        Plan
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        Enroll
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="glyphicon glyphicon-education"></i>
                        Academics
                    </a>
                </li>
            </ul>
            <hr />
        </div>
        <div class="col-sm-9">
            <h4 class="lead">Alerts</h4>
            <hr />
            <p class="text-center">You have no alert</p>
            <br />

            <h4 class="lead">Courses I've Taken</h4>
            <hr />
            <table class="table">
                <thead>
                <tr>
                    <th>Course</th>
                    <th>Course Name</th>
                    <th>Instructor</th>
                    <th>Grade Received</th>
                </tr>
                </thead>
                <tbody>
                <tr class="success">
                    <td>CS 49J</td>
                    <td>Introduction to Java</td>
                    <td>Frank Butt</td>
                    <td>A+</td>
                </tr>
                <tr class="success">
                    <td>CS 46B</td>
                    <td>Introduction to CS Part II</td>
                    <td>Frank Butt</td>
                    <td>A+</td>
                </tr>
                <tr class="warning">
                    <td>CS 49C</td>
                    <td>Introduction to C Programming</td>
                    <td>Frank Butt</td>
                    <td>C</td>
                </tr>
                <tr class="danger">
                    <td>CS 46A</td>
                    <td>Introduction to CS Part I</td>
                    <td>Frank Butt</td>
                    <td>F</td>
                </tr>
                </tbody>
            </table>
            <a href=""><p class="text-right">more</p></a>
            <br />

            <h4 class="lead">Student Balance</h4>
            <hr />
            <p class="text-center">You have no outstanding balance</p>
        </div>
    </div>
@endsection