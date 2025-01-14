<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup()
    {
        return view('frontend.signup');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|confirmed'

            ]);

        DB::table('users')->insert(
            [
                'Name'=>$request->name,
                'Email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);
        return redirect()->route('user.login'); 
    }

    public function loginform()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        $value = $request->only('email','password');
        if(Auth::attempt($value)) // Auth =users
        {
            return redirect()->route('website');
        } 
    }

    public function website() {
        return view('frontend.website');
    }

    public function logout()
    {
        return redirect()->route('user.login');
    }

    public function about() {
        return view('frontend.about');
    }
}
