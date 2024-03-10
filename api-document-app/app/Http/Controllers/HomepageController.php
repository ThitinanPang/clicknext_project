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
        return view('index', $data);
    }
     //Create resource
     public function create(){
        return view('home.index');
    }

    //Store resource
    public function store(Request $request){
        $request->validate([
            'workspace-input-name' => 'required'
        ]);
        $user_create = auth()->id() ?? 0; // You can set a default value like 0 if there's no authenticated user
        $favorite = false;

        $workspace = new Workspace;
        $workspace->name = $request->input('workspace-input-name');
        $workspace->user_create = $user_create;
        $workspace->favorite = $favorite;
        $workspace->save();
        return redirect()->route('home.index')->with('success','Workspace has been created succesfully');
    }
}
