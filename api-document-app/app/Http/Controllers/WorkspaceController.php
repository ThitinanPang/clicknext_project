<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;

class WorkspaceController extends Controller
{
    //Create Index
    public function index() {
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        return view('workspaces.index', $data);
    }

    //Create resource
    public function create(){
        return view('workspaces.create');
    }
}
