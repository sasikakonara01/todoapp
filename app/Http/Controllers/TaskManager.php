<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskManager extends Controller
{

    public function listTask()
    {
        // Get tasks for the currently authenticated user
        $tasks = Task::where('user_id', auth()->id())->get();  // Ensure to only get tasks for the logged-in user
        return view("welcome", compact("tasks"));
    }
    public function add()
    {
        return view('tasks.add');
    }

    public function addTaskPost(Request $request)
    {

        $request->validate([
            'title' => 'required|max:50',
            'deadLine' => 'required',
            'description' => 'required'

        ]);

        $tasks = new Task();
        $tasks->title = $request->title;
        $tasks->description = $request->description;
        $tasks->deadLine = $request->deadLine;
        $tasks->user_id = auth()->id();
        if ($tasks->save()) {
            return redirect(route("home"))->with("success", "Task Added Sucessfully");
        }
        return redirect(route("task.add"))->with("error", "Task Not Added");
    }
}
