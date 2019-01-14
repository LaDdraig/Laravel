<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\project;

class ProjectsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $projects = project::where('owner_id', auth()->id())->get();
        return view('projects.index', compact('projects'));
    }

    public function create(){
        return view('projects.create');

    }

    public function store(){

        $attributes = request()->validate([
            'title' => ['required', 'min: 3'],
            'description' => ['required',' min: 3']
        ]);

        $attributes['owner_id'] = auth()->id();
        project::create($attributes);

        return redirect('/projects');

    }

    public function show(project $project){
        abort_if($project->owner_id !== auth()->id(), 403);

        return view('projects.show', compact('project'));
    }

    public function edit(project $project){
        return view('projects.edit', compact('project'));
    }

    public function update(project $project){

        $project->update(request(['title','description']));

        return back();

    }

    public function destroy(project $project){

        $project->delete();
        return redirect('/projects');

    }

    public function edittasks(project $project){
        return view('projects.edittasks', compact('project'));
    }
}
