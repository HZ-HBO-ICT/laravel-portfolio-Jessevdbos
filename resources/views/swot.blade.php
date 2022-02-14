@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css\blog.css">
@endsection

@section('title')
    <title>Swot-page</title>
@endsection

@section('content')
    <div class="fullHeight">
        <main class="textStyling post">
            <h3>Persoonlijke SWOT analyse</h3>
            <table>
                <tr>
                    <th>Strenghts</th>
                    <th>Weaknesses</th>
                </tr>
                <tr>
                    <td>Doorzettingsvermogen, affiniteit met computers, levendige fantasie en oplossingsgericht</td>
                    <td>geen lang concentratievermogen als het onderwerp mij niet interesseert</td>
                </tr>
                <tr>
                    <th>Opportunities</th>
                    <th>Threats</th>
                </tr>
                <tr>
                    <td>interesse in computers en bedrijven voor technologische vooruitgang</td>
                    <td>Ik hou niet van urenlang leren maar wil graag dingen toepasbaar maken</td>
                </tr>
            </table>
        </main>
    </div>
@endsection


