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

        $workspace = new Workspace;
        $workspace->name = $request->input('workspace-input-name');
        $workspace->access = $request->input('access');

        if($user) {
            $workspace->user_create = $user->id;
        }

        $workspace->save();
        return redirect()->route('home.index')->with('success','Workspace has been created succesfully');
    }

    public function addCollection($id){
        $user = auth()->user() ;
        $collection = new Collection;
        $collection->name = 'New Collection';
        $collection->status = 'unsave';

        if($user) {
            $collection->user_create = $user->id;
        }
        $collections = [$collection];
        
        return redirect()->route('workspace.index', $id);
     }
}
