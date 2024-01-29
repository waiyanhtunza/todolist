<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store()
    {
        $valid = request()->validate([
            'task' => 'required'
        ]);

        Task::create($valid);

        return back()->with('add','Your Task Adding Succeful');

    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back()->with('success','Your Deleting task is successful');
    }
}
