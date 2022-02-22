@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
@endsection

@section('content')
    <table >
        <tr class="ulDesign">
            <th>course name</th>
            <th>test name</th>
            <th>lowest passing grade</th>
            <th>best grade</th>
            <th>passed at</th>
        </tr>
        @foreach($grades as $grade)
            <tr class="ulDesign">
                <td>{{ $grade->course_name }}</td>
                <td>{{ $grade->test_name }}</td>
                <td>{{ $grade->lowest_passing_grade }}</td>
                <td>{{ $grade->best_grade }}</td>
                <td>{{ $grade->passed_at }}</td>
                <td>
                    <form method="POST" action="/grades/{{ $grade->id }}">
                        @csrf
                        @method('DELETE')
                        <button class="delete" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5"></td>
        </tr>
        <tr>
            <th scope="col" colspan="5">Extra</th>
        </tr>
        <tr>
            <!-- stukje javascript om de kleuren aan te passen voor BSA in js folder -->
            <th scope="row">BSA</th>
            <td id="finalEC">0</td>
            <td id="passed">Gehaald</td>
            <td id="notPassed">Niet gehaald</td>
            <td></td>
        </tr>
    </table>
@endsection
