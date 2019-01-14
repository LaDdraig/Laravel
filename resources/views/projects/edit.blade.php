@extends('layout')

@section('content')
    <h1 class="title2 m-b-md">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: lem;">
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label text" for="title">Title</label>

            <div class="control">
                <input type="text"  class="input" name="title" placeholder="Title" value="{{ $project->title }}" required>
            </div>
        </div>

        <div class="field">
                <label class="label text" for="description">Description</label>
    
                <div class="control">
                <textarea name="description" class="textarea" required>{{ $project->description }}</textarea>
                </div>
        </div>

        <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update Project</button>
                    <a href="/projects/{{ $project->id }}" class="button">Back</a>
                </div>
        </div>
    </form>

    
@endsection