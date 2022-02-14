@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css\blog.css">
@endsection

@section('title')
    <title>programmeer-ervaring-page</title>
@endsection

@section('content')
    <div class="fullHeight">
        <main class="textStyling post">
            <h3>Programmeerervaring</h3>
            <table>
                <tr>
                    <th>Heb je al programmeerervaring?</th>
                    <td>Ja</td>
                </tr>
                <tr>
                    <th>Je hebt aangegeven dat je al programmeerervaring hebt. Kun je aangeven waar je die ervaring hebt opgedaan?</th>
                    <td>Vooropleiding en bij mijn hobbies/interesses</td>
                </tr>
                <tr>
                    <th>Beschrijf jouw programmeerervaring. </th>
                    <td>Op mijn vooropleiding (economie en bedrijfseconomie EUR) heb ik het vak ICT gevolgd. Hier heb ik leren werken met een eenvoudige versie van programmeren genaamd Blockly. Dit stond echter wel in het teken van economie en ging niet zo zeer
                        in op het schrijven van programmas, maar gaf wel de basis in essentie weer. Ook mijn interesse in minecraft laat mij af en toe kleine stukjes programmeer werk zien. Dit is echter niet heel lastig of ingewikkeld. Bij Blockly wordt volgens
                        mij gebruik gemaakt van javascript, bij minecraft is het een eigen taal.</td>
                </tr>
            </table>
        </main>
    </div>
@endsection

