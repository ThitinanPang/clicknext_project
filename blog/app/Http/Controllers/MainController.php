<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        return view("index");
    }

    public function store(Request $request) {
        $inputName = $request->input('inputname');

        // สร้าง Class Workspace
        $workspace = new Workspace($inputName);

        // เขียน SQL ลง Database
        // $workspace->saveToDatabase();

        return view('index',$inputName); // เปลี่ยนไปหน้า Success
    }
}
