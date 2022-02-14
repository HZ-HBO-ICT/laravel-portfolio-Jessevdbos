@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
@endsection

@section('content')
    <div class="fullHeight">
        <article>
            <section class="textStyling profileTextPersonal">
                <h1>Persoonlijke gegevens</h1>
                <p>naam: Jesse van den Bos</p>
                <p>Leeftijd: 19 jaar</p>
                <p>Ik kom uit een gezin van vader, moeder en 3 kinderen. Mijn vader was nederlands, mijn moeder komt uit Suriname. In 2014 is mijn vader (50) aan kanker overleden. In 2020 heb ik mijn rijbewijs gehaald bij rijschool Groen zoals u hiernaast
                    op de foto ziet. <br><br> Ik ben sinds klein opgegroeid in kapelle en vindt dit dus ook het mooiste dorp van zeeland. Ik ben christelijk opgegroeid, hierom ging ik in Goes naar de basis- en middelbare school. Aan het Calvijn college
                    heb ik het profiel: Economie en Maatschappij (E&M) gevolgd. Hieruit volgde mijn studie economie en bedrijfseconomie aan de Erasmus universiteit. Helaas dankzij corona kon ik niet doorgaan met de studie en ben ik weer thuis gaan wonen.
                    Uiteindelijk ben ik hier in middelburg aan de HZ terechtgekomen.</p>
            </section>

            <section class="textStyling characteristics">
                <h1>Jesse en zijn karakteristieken</h1>
                <p>Hoewel ik vele goede en minder goede eigenschappen heb,<br> word ik gekenmerkt door de volgende karakteristieken:
                </p>
                <ul>
                    <li>Rustig</li>
                    <li>Open voor fantasie</li>
                    <li>Integer</li>
                    <li>Doelmatigheid</li>
                    <li>Betrouwbaar</li>
                </ul>
            </section>

            <img id="mePicture" src="img\IMG_20200602_121208_368.jpg" alt="Foto rijexamen">
        </article>
    </div>

    <div class="fullHeight">
        <article>
            <section class="textStyling profileTextHobby">
                <h1>Bijbaan en Vrije Tijd</h1>
                <p>Ik werk tegenwoordig bij Postnl als bezorger. Ik bezorg pakketten op Zeeuws-Vlaanderen. Dit is goed te combineren met mijn voltijd studie aan de HZ. Naast werken game ik graag. Minecraft en League of Legends zijn de twee games waar ik
                    tegenwoordig mijn tijd aan spendeer.<br><br>Sporten is ook een grote hobby van mij. Ik heb 13 jaar op voetbal gezeten. Hier ben ik helaas mee gestopt aangezien ik ben gaan studeren en dit moeilijk te combineren was met mijn planning.
                    Op de middelbare zat ik in de sportklas. Hier heb ik geleerd dat ik veel gevoel heb voor verschillende sporten. Graag zou ik weer teruggaan op een sport. Voetbal zou fantastisch zijn, maar ik zit zelf ook eventueel te denken aan volleybal.<br>
                    <br>Naast sporten ben ik ook muzikaal. Ik heb 6 jaar op piano gezeten (ik weet er helemaal niks meer van). Nu drum ik al voor ongeveer 7 jaar. Sinds de laatste 3 jaar drum ik ook bij ons in de kerk in de band.</p>
            </section>
            <img class="leagueImage" src="img/league-of-legends.jpg" alt="league of legends image">
        </article>
    </div>

    <div>
        <article class="textStyling animeList">
            <section>
                <h1>Films en series</h1>
                <p>Ik heb een interesse in actie en fantasie films. Maar de categorie films en series waar ik echt van hou is toch wel de anime. Ik kijk al sinds ik klein ben anime, maar ben pas in de coronatijd meer tijd erin gaan steken. Ik heb al verschillende
                    van de grote anime's gezien en ben nu bezig aan One Piece. Deze anime heeft bijna 1000 afleveringen en loopt nog steeds. Hieronder voeg ik een lijst toe met anime die ik zeer hoog heb staan.</p>
            </section>
            <ul>
                <li>Inazuma Eleven</li>
                <li>Jujutsu Kaisen</li>
                <li>Kuroko no basket</li>
                <li>Sword Art Online</li>
                <li>Haikyuu</li>
            </ul>
        </article>
        <img class="fateSeries" src="https://images7.alphacoders.com/644/thumb-1920-644423.jpg" alt="Fate Series">
    </div>
@endsection
