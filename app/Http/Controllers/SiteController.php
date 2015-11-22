<?php

namespace App\Http\Controllers;

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
            return redirect()->action('ProfessorsController@index');
        }
        else {
            return redirect()->action('StudentsController@index');
        }
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
