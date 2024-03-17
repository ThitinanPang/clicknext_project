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


    //Store resource
    public function store(Request $request){
        $request->validate([
            'workspace-input-name' => 'required'
        ]);
        $user = auth()->user() ;

        if($user) {
            $user_create = $user->name;
        }
        else {
            $user_create = 'Anonymous';
        }
        $favorite = false;

        $workspace = new Workspace;
        $workspace->name = $request->input('workspace-input-name');
        $workspace->user_create = $user_create;
        $workspace->favorite = $favorite;
        $workspace->save();
        return redirect()->route('home.index')->with('success','Workspace has been created succesfully');
    }
}
