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

    public function login($sjsu_id, $password) {
        return $sjsu_id . " " . $password;
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
