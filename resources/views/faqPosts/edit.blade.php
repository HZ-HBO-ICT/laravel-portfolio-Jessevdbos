@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css\blog.css">
@endsection

@section('content')
    <div>
        <div>
            <h1 class="titel">Update Post</h1>

            <form method="POST" action="/faqs/{{ $faq->id }}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div>
                        <input class="input" type="text" name="question" id="question" value="{{ $faq->question }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea" name="answer" id="answer">{{ $faq->answer }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="link">Link</label>

                    <div class="control">
                        <textarea class="textarea" name="link" id="link">{{ $faq->link }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>


                    </div>
                </div>

            </form>

            <form method="POST" action="/faqs/{{ $faq->id }}">
                @csrf
                @method('DELETE')
                <button class="delete" type="submit">Delete</button>
            </form>

        </div>
    </div>
@endsection


