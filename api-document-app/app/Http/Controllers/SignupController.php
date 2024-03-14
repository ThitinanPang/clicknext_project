<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
     //Create Index
     public function index() {
        return view('signup');
    }
}
