@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css\blog.css">
@endsection

@section('content')
    <div class="fullHeight">
        <main class="textStyling post">
            <h3>{{ $faq->question }}</h3>
            <div>
                {{ $faq->answer }}
            </div>
            <br>
            <p>{{ $faq->link }}</p>
        </main>
    </div>
@endsection


