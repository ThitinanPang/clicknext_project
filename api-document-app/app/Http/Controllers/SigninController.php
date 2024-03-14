<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    //Create Index
    public function index() {
        return view('signin');
    }
}
