<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
