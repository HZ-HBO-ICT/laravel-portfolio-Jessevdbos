<!DOCTYPE html>
<html lang="en">

<head>
    @yield('styling')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Request::path() === '/' ? 'homepage' : Request::path() }}</title>
</head>

<header class="navigationHeader">
    <!-- div full-height gebruikt om de index pagina een clean look te geven (blank page) -->
    <div class="dropdown">
        <button class="dropbtn"><img id="menuImage"
                                     src="img\HZ Logo.jpg" alt=""></button>
        <div class="dropdownContent">
            <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">Onderwijs en Examenregelingen</a>
            <a href="https://hz.nl/uploads/documents/Regelingen/NL/Uitvoeringsregeling-OER-HBO-ICT-Voltijd-2019-2020.pdf" target="_blank">Uitvoeringsregeling HBO-ICT</a>
            <a href="https://learn.hz.nl/my/" target="_blank">Learn.hz.nl</a>
            <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams</a>
            <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Studievoortgang</a>
            <a href="https://github.com/HZ-HBO-ICT" target="_blank">Github HBO-ICT</a>
        </div>
    </div>
{{--    @yield('nav-bar')--}}
    <nav class="navLi nav">
        <ul class="homepage">
            <li id="{{ Request::path() ==='profile' ? 'active' : '' }}"><a href="{{ Request::path() ==='profile' ? '#bottom' : '/profile' }}">Profile</a></li>
            <li id="{{ Request::path() ==='dashboardSchools' ? 'active' : '' }}"><a href="{{ Request::path() ==='dashboardSchools' ? '#bottom' : route('dashboardSchools.index') }}">Dashboard</a></li>
            <li id="{{ Request::path() ==='/' ? 'active' : '' }}"><a href="{{ Request::path() === '/' ? '#bottom' : '/' }}">Home</a></li>
            <li id="{{ Request::path() ==='faqs' ? 'active' : '' }}"><a href="{{ Request::path() ==='faqs' ? '#bottom' : route('faqs.index') }}">FAQ</a></li>
            <li id="{{ Request::path() ==='blogs' ? 'active' : '' }}"><a href="{{ Request::path() ==='blogs' ? '#bottom' : route('blogs.index') }}">Blog</a></li>
            <li id="{{ Request::path() ==='login' ? 'active' : '' }}"><a href="{{ Request::path() ==='login' ? '#bottom' : '/login' }}">login</a></li>
        </ul>
    </nav>
</header>

<body class="bckgroundDesignIndex">

    @yield('content')

</body>

<footer id="bottom" class="footer">
    <a href="#top">
        <h2 class="footerDesign">Home</h2>
    </a>
</footer>
</html>
