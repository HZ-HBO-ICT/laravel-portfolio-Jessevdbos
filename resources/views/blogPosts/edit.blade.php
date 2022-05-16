@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/blog.css">
@endsection

@section('content')
    <div>
        <h1 class="titel">New Article</h1>

        <form method="POST" action="{{ route('blogs.show', $blog->id) }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="title">Update Article</label>

                <div>
                    <input class="input" type="text" name="title" id="title" value="{{ $blog->title }}" required>
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt" required>{{ $blog->excerpt }}</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Body</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body" required>{{ $blog->body }}</textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>

        </form>

        <form method="POST" action="/blogs/{{ $blog->id }}">
            @csrf
            @method('DELETE')
            <button class="delete" type="submit">Delete</button>
        </form>

    </div>
@endsection


