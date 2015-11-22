<?php

namespace App\Http\Controllers;

use App\Instructor;
use App\Professor;
use App\Student;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $id = $request->get('sjsu_id');

        // For simplicity, if < 50 then Professor else Student
        if($id < 50) {
            $user = Instructor::where('iid', $id)->first();

            if($user && $request->get('password') === $user->password) {
                return redirect()->action('ProfessorsController@index');
            }
        }
        else {
            $user = Student::where('sid', $id)->first();

            if($user && $request->get('password') === $user->password) {
                return redirect()->action('StudentsController@index');
            }
        }

        return redirect()->back();
    }

    public function logout() {

    }

    public function cecilia() {
        return view('cecilia/temp');
    }

    public function maninderpal() {
        return view('maninderpal/temp');
    }
}
