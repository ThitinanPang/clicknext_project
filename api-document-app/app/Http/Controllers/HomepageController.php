<?php

namespace App\Http\Controllers;
use App\Models\Workspace;
use App\Models\User;


use Illuminate\Http\Request;

class HomepageController extends Controller
{
     //Create Index
     public function index() {
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        return view('home', $data);
    }
}
