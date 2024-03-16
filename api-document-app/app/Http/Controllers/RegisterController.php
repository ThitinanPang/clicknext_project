<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;


class SignupController extends Controller
{
     //Create Index
     public function index() {
        return view('signup');
    }

    //Sign Up
    public function store(Request $request){
        $request->validate([
            'name' => 'required' ,
            'email' => 'required' ,
            'password' => 'required|min:6' ,
            'confirm_password' => 'required|same:password'
        ]);


        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('signin.index');
    }
}
