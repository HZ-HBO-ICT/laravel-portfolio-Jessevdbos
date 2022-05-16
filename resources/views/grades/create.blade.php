@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/dashboard.css">
@endsection

@section('content')
    <div>
        <div>
            <h1>New Grade</h1>

            <form method="POST" action="{{ route('grades.store') }}">
                @csrf

                <div class="field">
                    <label class="label" for="course_name">Course name</label>

                    <div>
                        <input class="input" type="text" name="course_name" id="course_name">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="test_name">Test name</label>

                    <div>
                        <input class="input" type="text" name="test_name" id="test_name">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="lowest_passing_grade">Lowest passing grade</label>

                    <div>
                        <input class="input" type="text" name="lowest_passing_grade" id="lowest_passing_grade"
                               required min="0" max="10">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="best_grade">Best grade</label>

                    <div>
                        <input class="input" type="text" name="best_grade" id="best_grade" required min="0" max="10">
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
