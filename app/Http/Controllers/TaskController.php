<?php

namespace App\Http\Controllers;

use App\tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
       // $name = $request->input('name');

    //    dd($request->all());
    // $tasks = new tasks();
    // $tasks->task=$request->task5;
    // $tasks->save;
    // return redirect()->back();
        $tasks = new tasks();
        $tasks->task=$request->task5;
        $tasks->save;
        return redirect() ->back();
    }
}
