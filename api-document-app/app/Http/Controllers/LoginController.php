<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
class LoginController extends Controller
{

    //Create Index
    public function index() {
        return view('signin');
    }

    public function login(Request $request) {
        $input = $request->all();

        $this->validate([
            'name'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt(array('email'=>$input['email'],'password'=>$input['password']))){
            return redirect()->route('home.index');
        }
        else {
            return redirect()->route('login')->with('error','Email or Password are wrong.');

        }
    }
}
