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
                $courses = Course::all();
                return response()->json(['courses' => $courses]);

            default:
                return "no data specified";
        }
    }
}
