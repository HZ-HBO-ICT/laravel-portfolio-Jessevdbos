@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
@endsection

@section('content')
    <div class="fullHeight">
        <table >
            <tr class="ulDesign">
                <th>course name</th>
                <th>test name</th>
                <th>lowest passing grade</th>
                <th>best grade</th>
                <th>passed at</th>
                <th>options</th>
            </tr>
            @foreach($grades as $grade)
                <tr class="ulDesign">
                    <td>{{ $grade->course_name }}</td>
                    <td>{{ $grade->test_name }}</td>
                    <td>{{ $grade->lowest_passing_grade }}</td>
                    <td>{{ $grade->best_grade }}</td>
                    <td></td>
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
                <td colspan="6"></td>
            </tr>
            <tr>
                <th scope="col" colspan="6">Extra</th>
            </tr>
            <tr>
                <!-- stukje javascript om de kleuren aan te passen voor BSA in js folder -->
                <th scope="row">BSA</th>
                <td id="finalEC">0</td>
                <td id="passed">Gehaald</td>
                <td id="notPassed">Niet gehaald</td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <div class="aside">
            <h1>Interessante links</h1>
            <ul>
                <li>
                    <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">Onderwijs
                        en Examenregelingen</a>
                </li>
                <li>
                    <a href="https://hz.nl/uploads/documents/Regelingen/NL/Uitvoeringsregeling-OER-HBO-ICT-Voltijd-2019-2020.pdf" target="_blank">Uitvoeringsregeling HBO-ICT</a>
                </li>
                <li>
                    <a href="https://learn.hz.nl/my/" target="_blank">Learn.hz.nl</a>
                </li>
                <li>
                    <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams</a>
                </li>
                <li>
                    <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Studievoortgang</a>
                </li>
                <li>
                    <a href="https://github.com/HZ-HBO-ICT" target="_blank">Github HBO-ICT</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
