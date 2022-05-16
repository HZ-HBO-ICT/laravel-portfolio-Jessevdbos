@extends('layout')

@section('styling')
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
@endsection

@section('content')
    <!-- div full-height gebruikt om de index pagina een clean look te geven (blank page) -->
    <div class="fullHeight">
        <h1 class="bos">Bos</h1>
    </div>

    <div>
        <div class="textStyling intro">
            <h1>content website</h1>
            <p>Op deze pagina wil ik verduidelijken waarom ik deze site heb gebouwd. Ook geef ik wat meer informatie over hoe de site in elkaar zit. Door deze pagina hoop ik duidelijk te maken waarom ik denk dat <a href="https://hz.nl/opleidingen/hbo-ict?utm_campaign=GS+%7C+VT+NL+%7C+Technologie+%26+Innovatie+%7C+Sanne&utm_medium=ppc&utm_source=adwords&utm_term=%2Bict%20%2Bhbo&hsa_acc=1275142988&hsa_net=adwords&hsa_tgt=kwd-20938291016&hsa_ad=346683453824&hsa_src=g&hsa_cam=627590144&hsa_grp=36986888771&hsa_mt=b&hsa_ver=3&hsa_kw=%2Bict%20%2Bhbo&gclid=CjwKCAjwyvaJBhBpEiwA8d38vGNFllJdm6ZjTHvnkk9nAKUHEPiSWtK7FLF_C13cTZuWgevm6w9PJhoCJPMQAvD_BwE"
                                                                                                                                                                                                                       targt="_blank">HBO-ICT</a> een geschikte opleiding voor mij is. Bovendien hoop ik ook wat meer informatie over mezelf te geven zodat het steeds duidelijker wordt wie "Jesse" nou precies is.</p>
        </div>

        <div class="textStyling intro">
            <h1>De Website</h1>
            <p>Goedendag,</p>
            <p>Ik ben Jesse, de developer van deze website. Voor meer informatie over mezelf verwijs ik u naar mijn <a href="profile">profile page</a>.<br><br> ICT wordt steeds belangrijker in de wereld. Overheden, multinationals, kleine bedrijven,
                u maar ook ik. Iedereen maakt gebruik van ICT. Maar wat is dit nu precies, en hoe kunnen we het gebruiken om ons leven of de opbrengsten van onze toekomst te maximaliseren. Ik ben ICT gaan studeren om mijzelf een baan in de toekomst te
                verzekeren. Ict is voor mij de plek waar ik mijn creatieve kant met mijn nieuwsgierige kant kan koppelen. Moeilijke vraagstukken die voor vele onmogelijk lijken zou ik kunnen oplossen aan de hand van een programma of algorithme. Ik wil
                mijzelf ontwikkelen om niet te denken in onmogelijkheden, maar in oplossingen. Deze website is hiet het bewijs van. Toen ik aan deze opleiding begon, wist ik nog niks van ICT of programmeren, maar nu u dit leest kunt u zien dat ik wel
                degelijk dit probleem heb opgelost. Ik ben er nog niet, maar dit is wel een begin.<br><br> Ik heb deze website als een opdracht voor mijn studie gebouwd. Hieronder heb ik een lijstje neergezet met handige tools in mijn site.</p>
            <ul>
                <li>Navigeren door de website kan via het navigatiemenu aan de top van elke pagina</li>
                <li>Aan de onderkant van elke pagina zal de desbetreffende pagina nogmaals staan, als u hierop klikt wordt u automatisch terug naar de top gebracht</li>
                <li>In de linker bovenhoek vindt u een dropdown menu naar interressante links die relevant zijn voor mijn studie</li>
            </ul>
            <p>Voor verdere vragen verwijs ik u naar de developer.</p>
        </div>
        <img class="ictImage" src="img\ICT gerelateerde afbeelding remake.jpg" alt="">
        <img class="me2Picture" src="img\IMG_20181204_214347_007 remake.jpg" alt="Foto van mezelf">
    </div>
@endsection
