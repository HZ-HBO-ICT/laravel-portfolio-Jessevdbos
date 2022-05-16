@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css\blog.css">
@endsection

@section('content')
    <div>
        <div>
            <h1>New Post</h1>

            <form method="POST" action="{{ route('faqs.index') }}">
                @csrf

                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div>
                        <input class="input" type="text" name="question" id="question" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer" id="answer" required></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link</label>

                    <div class="control">
                        <textarea class="textarea" name="link" id="link" required></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection


