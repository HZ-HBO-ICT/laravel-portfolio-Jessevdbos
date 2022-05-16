@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
@endsection

@section('content')
    <main>
        <article class="fullHeight">
            <section class="textStyling blogArticle">
                <h3>Article</h3>
                <p>Er gaan vele discussies rond over de vraag of het article statement binnen het sectie statement moet komen te staan, of andersom.<br> Op deze pagina geef ik wat informatie over de verschillende meningen.<br><br>Een article is een zelfstandig
                    element wat gekenmerkt wordt door het feit dat het in zijn geheel overgeplaats kan worden naar een andere website.<br>Een section kan dit niet omdat het een onderdeel is van een ander element.</p>
            </section>

            <section class="textStyling blogSection">
                <h3>Section Links</h3>
                <ul>
                    <li><a href="https://www.edictum.nl/lesson/html/2" target="_blank">HTML lesson Edictum</a></li>
                    <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article" target="_blank">MDN Web Docs</a></li>
                    <li><a href="https://www.w3schools.com/html/html5_semantic_elements.asp" target="_blank">W3 Schools</a></li>
                    <li><a href="https://stackoverflow.com/questions/7549561/section-vs-article-html5#:~:text=is%20related%20to%20%3C,videos%2C%20images%20or%20news%20items." target="_blank">Stack Overflow</a></li>
                </ul>
            </section>

            <section class="textStyling blogArticle">
                <h3>Afsluitend article met mijn mening</h3>
                <p>Door de verschillende linkjes hebben we kunnen zien wat de meningen zijn op het gebied van article vs section. Het is belangrijk te onthouden dat ieder zijn eigen voorkeur heeft en we die moeten kunnen respecteren. Als u naar mijn voorkeur
                    vraagt, kijk dan nog maar een keer naar deze pagina.</p>
            </section>
        </article>

        <article class="fullHeight blogPosts">
            <section class="textStyling">
                <h3>Post Studiekeuze</h3>
                <br>
                <h4>Motiveer je studiekeuze</h4>
                <p>Ik heb besloten om deze studie te doen vanwege mijn interesse voor het werken met computers. Tijdens mijn vorige opleiding heb ik het vak ICT gevolgd en ben ik erachter gekomen dat...</p>
                <p><a href="studiekeuze">Lees meer...</a> </p>
                <img class="img" src="https://www.maashagoort.nl/wp-content/uploads/2021/01/hz.jpg" alt="Afbeelding hz">
            </section>

            <section class="textStyling">
                <h3>Post Persoonlijke SWOT analyse</h3>
                <table>
                    <tr>
                        <th>Strenghts</th>
                        <th>Weaknesses</th>
                    </tr>
                </table>
                <img class="img" src="https://visionesta.com/storage/wink/images/K2G1i8L8UIXNqKq9RyctSceXaInLeeSrZlORSwdG.jpeg" alt="SWOT analyse">
                <p><a href="swot">Lees meer...</a> </p>
            </section>

            <section class="textStyling">
                <h3>Post Programmeerervaring</h3>
                <table>
                    <tr>
                        <th>Heb je al programmeerervaring?</th>
                        <td>Ja</td>
                    </tr>
                </table>
                <img class="img" src="https://icttrainingen.nl/media/mageplaza/blog/post/p/h/php-programmeren-voor-beginners_1.png" alt="plaatje van programeren">
                <p><a href="programmeerervaring">Lees meer...</a> </p>
            </section>

            <section class="textStyling">
                <h3>Post Feedback</h3>
                <p>Hoi Jesse, Goed om te lezen dat je enthousiast bent gemaakt door een bekende in de opleiding! En zo te lezen...</p>
                <p><a href="feedback">Lees meer...</a> </p>
            </section>

            <section class="textStyling">
                <h3>Post ICT beroepenveld</h3>
                <p>De bedrijvensafari met onder andere Damen Naval, Your surprise en...</p>
                <img class="img" src="https://marineschepen.nl/vacatures/images/f126-damen.jpg" alt="Afbeelding Damen Naval">
                <p><a href="ict">Lees meer...</a> </p>
            </section>
        </article>
        <ul class="textStyling">
            @foreach($articles as $article)
                <li>
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->excerpt }}</p>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
