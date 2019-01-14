@extends('layout')

@section('content')
    @if ($project->tasks->count())
    <div class="box m-b-md">
        
    <div class="field">
            <label class="label" for="">Tasks</label>
    
    
        </div>
        @foreach ($project->tasks as $task)
            <div>
                <form method="POST" action="/tasks/{{ $task->id }}">
                    @method('PATCH')
                    @csrf
                    <label class="checkbox {{ $task->completed ? 'is-done' : '' }}" for="completed">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                    </label>
                </form>
            </div>
        @endforeach
        <form method="POST" action="/projects/{{ $project->id }}/edittasks">
            @method('DELETE')
            @csrf
        <a href="/projects/{{ $project->id }}/editTasks" class="button">Delete</a>
        <a href="/projects/{{ $project->id }}" class="button is-link">Back</a>
        </form>
    </div>
    @endif
    
@endsection