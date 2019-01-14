<?php

namespace App\Http\Controllers;

use App\Task;
use App\project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function index(project $project){
        $projects = project::all();
        return view('projects.index', compact('projects'));
    }
    public function update(Task $task){
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }

    public function store(project $project){
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);


        return back();
    }
    public function destroy() {
        $checked = Request::input('checked',[]);
        //Or as @Alex suggested 
        Project::whereIn($checked)->delete();
     }
}
