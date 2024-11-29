<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManager extends Controller
{
    public function add()
    {
        return view('tasks.add');
    }

    public function addTaskPost(Request $request)
    {

        $request->validate([
            'title' => 'required|max_digits:50',
            'deadLine' => 'required',
            'description' => 'required'
        ]);
    }
}
