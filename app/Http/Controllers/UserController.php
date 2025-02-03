<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        else{
            return redirect()->route('user.login');
        }
    }

    public function website() {
        return view('frontend.website');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('user.login');
    }

    public function about() {
        return view('frontend.about');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);
    
        User::insert([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return redirect()->route('users.list');
    }
    public function userList(Request $request) {
            $users = User::all();
            return view('Admin.user-list', compact('users'));
    }

    public function edit($id) 
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.list')->with('error', 'User not found.');
        }

        return view('Admin.edit-user', compact('user')); // ✅ Use a separate edit view
    }



    public function update(Request $request, string $id) 
    {
        $user = User::findOrFail($id); 

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);
    
        $user->update($validated);

        return redirect()->route('users.list')->with('success', 'User updated successfully.');
    }

    public function distroy($id)
    {
        $user = DB::table('users')->where('id' , $id)->delete();
        return redirect()->route('users.list');
    }

}
