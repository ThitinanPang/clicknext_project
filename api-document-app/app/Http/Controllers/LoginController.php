<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Create Index
    public function index() {
        return view('login');
    }
}
