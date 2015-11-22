<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    /*
     * localhost/index.php/api?data=courses
     */
    public function main(Request $request) {
        switch($request->data) {
            case "courses":
                $courses = [
                    [
                        'courseid' => '10000',
                        'coursename' => 'CS46A',
                        'professor' => 'O-Brien',
                        'room' =>'WSQ 109'
                    ],
                    [
                        'courseid' => '20000',
                        'coursename' => 'CS46B',
                        'professor' => 'Potika',
                        'room' => 'MQH 233'
                    ]
                ];
//                $courses = Course::all();
                return response()->json(['courses' => $courses]);

            default:
                return "no data specified";
        }
    }
}
