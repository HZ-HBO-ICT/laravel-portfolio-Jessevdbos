@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
@endsection

@section('title')
    <title>faq-page</title>
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
            {{--            <table>--}}
            {{--                <tr>--}}
            {{--                    <th scope="row">Vragen</th>--}}
            {{--                    <th scope="row">Antwoorden</th>--}}
            {{--                    <th scope="row"><br></th>--}}
            {{--                    <th scope="row">Links</th>--}}
            {{--                </tr>--}}
            {{--                <tr>--}}
            {{--                    <th scope="col">Hoe print je een document hier op de HZ?</th>--}}
            {{--                    <td>Als de print opdracht is uitgevoerd meld je jezelf aan op de TouchID naast de printer met behulp van de HZ pas. Kies vervolgens voor de optie Print / Afdrukken. Vervolgens krijg je te zien welke printopdrachten er gereed staan.--}}
            {{--                        Als er voldoende saldo op je printaccount staat worden de printopdrachten afgedrukt. Na het afdrukken druk op de TouchID op Stop en vervolgens Logout.</td>--}}
            {{--                    <td><br></td>--}}
            {{--                    <td><a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=bd81be42f243450e95e510949a496145&from=cb85b1fc-30b7-4c40-9fdb-2f95a55db6ea" target="_blank">Voor meer informatie over kopieren en printen</a></td>--}}
            {{--                </tr>--}}
            {{--                <tr>--}}
            {{--                    <th scope="col">Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?</th>--}}
            {{--                    <td>Zorg ervoor dat je minimaal €0,07 tegoed hebt. Scannen is gratis maar dit bedrag (of hoger) moet op op je HZ pas staan. Meld jezelf aan op de TouchID naast de printer met behulp van de HZ pas. Kies in het TouchID menu voor de optie--}}
            {{--                        Scanning - Scan. Leg de originele(n) op de feeder of glazen plaat. Druk op Scan and Send. Druk op Scan to me. Druk op Yes. Druk op de Start knop. Het volgende scherm wordt weergegeven als er gescand wordt via de glazen plaat.--}}
            {{--                        Druk op de groene Start knop op de printer om pagina voor pagina te scannen. Als dit gereed is druk dan op Start Sending. Na het scannen druk op de TouchID op Stop en vervolgens Logout.</td>--}}
            {{--                    <td><br></td>--}}
            {{--                    <td><a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=bd81be42f243450e95e510949a496145&from=cb85b1fc-30b7-4c40-9fdb-2f95a55db6ea" target="_blank">Zie de overige vragen op deze pagina</a></td>--}}
            {{--                </tr>--}}
            {{--                <tr>--}}
            {{--                    <th scope="col">Wat moet je doen als je ziek bent of symptomen van het corona virus?</th>--}}
            {{--                    <td>Volg het stappenplan van de HZ</td>--}}
            {{--                    <td><br></td>--}}
            {{--                    <td><a href="https://hz.nl/uploads/documents/20201001-Schema-Wel-of-niet-naar-de-HZ-bij-gezondheidsklachten.pdf?utm_medium=email&_hsmi=2&_hsenc=p2ANqtz-_wVxC-wKVc9CoWegsYD-KZQ8D1NrPbpHByenzbbZA7Wj6Yvlg9XmhzbGED3vdfWcucz29F2wY2u_rAmwvgoBCGr0XKQg&utm_content=2&utm_source=hs_email#asset:25736"--}}
            {{--                           target="_blank">Stappenplan HZ</a></td>--}}
            {{--                </tr>--}}
            {{--                <tr>--}}
            {{--                    <th scope="col">Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?</th>`--}}
            {{--                    <td>Via de volgende link kun je een projectruimte reserveren. Indien je na 15 minuten na aanvang van je reservering nog niet aanwezig bent, vervalt de reservering en is de ruimte vrij te gebruiken voor anderen.</td>--}}
            {{--                    <td><br></td>--}}
            {{--                    <td><a href="https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c" target="_blank">Link voor reserveringen</a> </td>--}}
            {{--                </tr>--}}
            {{--                <tr>--}}
            {{--                    <th scope="col">Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?</th>--}}
            {{--                    <td>Gratis parkeren is mogelijk op het parkeerterrein van PZEM aan de Poelendaelesingel 10 in Middelburg. Studenten en medewerkers kunnen enkel op vertoon van een HZ-pas het terrein betreden, gasten kunnen aanbellen bij de slagboom.--}}
            {{--                        Bij de slagbomen van het parkeerterrein Poelendaelesingel is een bel aanwezig. Na het passeren van de slagboom volg je de borden naar de HZ-parkeerplaatsen, gemarkeerd met een wit bordje met het HZ-logo.</td>--}}
            {{--                    <td><br></td>--}}
            {{--                    <td><a href="https://hz.nl/over-de-hz/contact/middelburg" tager="_blank">Parkeerinformatie HZ Middelburg</a></td>--}}
            {{--                </tr>--}}
            {{--            </table>--}}
        </article>
    </main>
@endsection
