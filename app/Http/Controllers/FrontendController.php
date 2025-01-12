<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function signup()
    {
        return view('frontend.signup');
    }
    public function login()
    {
        return view('frontend.login');
    }

    public function home() {
        return view('frontend.home');
    }

    public function about() {
        return view('frontend.about');
    }
}
