@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
@endsection

@section('content')
    <main>
        <article>
            <ul >
                @foreach($posts as $post)
                    <li class="ulDesign">
                        {{ $post->question }}
                        <p>{{ $post->answer }}</p>
                        <p>{{ $post->link }}</p>
                        <br>
                    </li>

                @endforeach
            </ul>
        </article>
    </main>
@endsection
