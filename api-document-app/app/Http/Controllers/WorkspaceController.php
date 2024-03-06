<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    //Create Index
    public function index() {
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        return view('workspaces.index', $data);
    }
}
