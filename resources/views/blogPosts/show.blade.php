@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/blog.css">
@endsection

@section('content')
    <div class="fullHeight">
        <main class="textStyling post">
            <h3>{{ $article->title }}</h3>
            <div>
                {{ $article->body }}
            </div>
            <br>
            <img src="{{ $article->img }}">
        </main>
    </div>
@endsection


