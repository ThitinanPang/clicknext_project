<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;
use App\Models\Collection;
use App\Models\User;


class WorkspaceController extends Controller
{
    public function index($id){
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        $data['selectedWorkspace'] = Workspace::find($id);
        $data['collections'] = Collection::orderBy('id','desc')->paginate(5);

        if (!$data['selectedWorkspace']) {
            return redirect()->route('home.index')->with('error', 'Workspace not found');
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
        $collection->workspace_id = $workspace->id;
        $collection->status = 'active';

        $workspace->collections()->save($collection);

        return redirect()->route('workspace.index', $id)->with('success', 'Collection added successfully');
    }


    public function create() {
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        return view('create', $data);
    }

    public function store(Request $request){
        $request->validate([
            'workspace-input-name' => 'required',
            'access' => 'required'
        ]);
        $user = auth()->user() ;

        if($user) {
            $user_create = $user->id;
        }
        else {
            $user_create = 'Anonymous';
        }
        $workspace = new Workspace;
        $workspace->name = $request->input('workspace-input-name');
        $workspace->access = $request->input('access');
        $workspace->user_create = $user_create;
        $workspace->save();
        return redirect()->route('home.index')->with('success','Workspace has been created succesfully');
    }
}
