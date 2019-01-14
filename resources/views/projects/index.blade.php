@extends('layout')

@section('content')
<h1 class="title m-b-md" style="text-align:center">Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li class="wow" style="links"> 
                <a href="/projects/{{ $project->id }}"> {{ $project->title }} </a>
            </li>
        @endforeach
    </ul>
    <div class="field" style="margin-bottom: lem;">
            <div class="control">
                <a href="/projects/create" class="button is-link">New Project</a>
                <a href="/" class="button is-link">Back</a>
            </div>
    </div>
@endsection