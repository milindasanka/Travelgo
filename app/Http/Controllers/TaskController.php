<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request){

        $task=new Task;

        $task->name=$request->name;
        $task->e_mail=$request->email;
        $task->subject=$request->subject;
        $task->message=$request->message;
        $task->save();
        Toastr::success('Successfully Saved :)','Success');

        return redirect()->back();
       // dd($request->all());

    }
}
