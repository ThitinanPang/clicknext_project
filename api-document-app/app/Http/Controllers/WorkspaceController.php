<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Workspace;
use App\Models\Collection;
use App\Models\File;




class WorkspaceController extends Controller
{
    //Create Index
    public function index($id){
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        $data['selectedWorkspace'] = Workspace::find($id);
        $data['collections'] = Collection::orderBy('id','desc')->paginate(5);
        $data['files'] = File::orderBy('id','desc')->paginate(5);

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
        $collection->workspace_id = $workspace->id;
        $collection->status = 'active';

        $workspace->collections()->save($collection);

        return redirect()->route('workspace.index', $id)->with('success', 'Collection added successfully');
    }

    public function add_file($id)
    {

        $workspace = Workspace::find($id);

        if (!$workspace) {
            return redirect()->route('home')->with('error', 'Workspace not found');
        }

        $file = new File();
        $file->name = "Untitled-" . (File::count() + 1);
        $file->path = "URL";
        $file->user_create = auth()->user()->name;

        $file->save();

        return redirect()->route('workspace.index',$id)->with('success', 'File added successfully');
    }
}

