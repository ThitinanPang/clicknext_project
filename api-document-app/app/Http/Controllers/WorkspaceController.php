<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Workspace;
use App\Models\Collection;



class WorkspaceController extends Controller
{
    //Create Index
    public function index(){
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        return view('workspace', $data);
    }

    public function show($id)
    {
        $data['workspaces'] = Workspace::orderBy('id', 'desc')->paginate(5);
        $data['selectedWorkspace'] = Workspace::find($id);

        // $collections = Collection::orderBy('id', 'desc');


        if (!$data['selectedWorkspace']) {
            return redirect()->route('home')->with('error', 'Workspace not found');
        }

        return view('workspace', $data);
    }

    public function add_collection($id)
    {

        $workspace = Workspace::find($id);

        if (!$workspace) {
            return redirect()->route('home')->with('error', 'Workspace not found');
        }

        $collection = new Collection();
        $collection->name = "New Collection";
        $collection->user_create = auth()->user()->name;
        $collection->status = 'active';

        $workspace->collections()->save($collection);

        return redirect()->route('workspace.show', ['id' => $id])->with('success', 'Collection added successfully');
    }
}
