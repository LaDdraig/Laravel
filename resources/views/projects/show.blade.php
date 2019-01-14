@extends('layout')

@section('content')
    <h1 class="title2">{{ $project->title }}</h1>

    <div class="content text"> 
        {{ $project->description }} 
            <p>
                    <a href="/projects/{{ $project->id }}/edit">Edit</a>
            </p>
    </div>

    @if ($project->tasks->count())
        <div class="box">
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
            
            <a href="/projects/{{ $project->id }}/editTasks" class="button is-link">Edit</a>
        </div>
    @endif
    {{-- new task form --}}
    <form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf
        <div class="field">
            <label class="label" for="">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" placeholder="" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add</button>
            </div>
        </div>

       @include('errors')

    </form>
    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: lem;">
        @method('DELETE')
        @csrf
            <div class="field">
                    <div class="control">
                        <button type="submit" class="button">Delete Project</button>
                        <a href="/projects" class="button is-link">Back</a>
                    </div>
            </div>
    </form>
@endsection