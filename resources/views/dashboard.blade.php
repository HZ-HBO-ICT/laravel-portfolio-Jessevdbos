<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css\dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
</head>

<body class="bckgroundDesign fullHeight">
<header class="navigationHeader">
    <div class="dropdown">
        <button class="dropbtn"><img id="menuImage"
                                     src="img\HZ Logo.jpg"></button>
        <div class="dropdownContent">
            <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen" target="_blank">Onderwijs en Examenregelingen</a>
            <a href="https://hz.nl/uploads/documents/Regelingen/NL/Uitvoeringsregeling-OER-HBO-ICT-Voltijd-2019-2020.pdf" target="_blank">Uitvoeringsregeling HBO-ICT</a>
            <a href="https://learn.hz.nl/my/" target="_blank">Learn.hz.nl</a>
            <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">Teams</a>
            <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Studievoortgang</a>
            <a href="https://github.com/HZ-HBO-ICT" target="_blank">Github HBO-ICT</a>
        </div>
    </div>
    <nav class="nav">
        <ul class="homepage">
            <li><a href="profile.html">Profile</a></li>
            <li id="active"><a href="#dbBottom">Dashboard</a></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="blog.html">Blog</a></li>
        </ul>
    </nav>
</header>

<main class="dashboardMain">
    <div>
        <div>
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
        </div>
{{--        <table>--}}
{{--            <tr>--}}
{{--                <th scope="col" colspan="4">Blok 1</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="col">Curses</th>--}}
{{--                <th scope="col">Aantal EC</th>--}}
{{--                <th scope="col">Cijfer</th>--}}
{{--                <th scope="col">Exam</th>--}}
{{--                <th scope="col" hidden>Hidden EC</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">Program- & Career Orientation (OBO)</th>--}}
{{--                <td>2,5</td>--}}
{{--                <td>9.6</td>--}}
{{--                <td>Assessment exam</td>--}}
{{--                <td class="countableEC" hidden>2.5</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">Computer science basics (CBA)</th>--}}
{{--                <td>5</td>--}}
{{--                <td>8</td>--}}
{{--                <td>Written exam</td>--}}
{{--                <td class="countableEC" hidden>5</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">Programming basics (PBA)</th>--}}
{{--                <td>5</td>--}}
{{--                <td>10</td>--}}
{{--                <td>Case study exam</td>--}}
{{--                <td class="countableEC" hidden>5</td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <th scope="col" colspan="4">Blok 2</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row" rowspan="2">Object-oriented programming (OPR)</th>--}}
{{--                <td rowspan="2">10</td>--}}
{{--                <td></td>--}}
{{--                <td>Case study</td>--}}
{{--                <td class="countableEC" hidden></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Project</td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <th scope="col" colspan="4">Blok 3</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">Framework development 1 (FDE1) </th>--}}
{{--                <td>5</td>--}}
{{--                <td></td>--}}
{{--                <td>Case study</td>--}}
{{--                <td class="countableEC" hidden></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}

{{--                <th scope="row" rowspan="3">Framework project 1 (FPR1) </th>--}}
{{--                <td rowspan="3">7,5</td>--}}
{{--                <td></td>--}}
{{--                <td>Project</td>--}}
{{--                <td class="countableEC" hidden></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Assessment</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Report</td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <th scope="col" colspan="4">Blok 4</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row" rowspan="3">Framework project 2 (FPR2) </th>--}}
{{--                <td rowspan="3">10</td>--}}
{{--                <td></td>--}}
{{--                <td>Portfolio</td>--}}
{{--                <td class="countableEC" hidden></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Project</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td>Assessment</td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <th scope="col" colspan="4">Personal Professional Development Exploration</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">Personal Professional Development Exploration (PPDE)</th>--}}
{{--                <td>12,5</td>--}}
{{--                <td></td>--}}
{{--                <td>Portfolio</td>--}}
{{--                <td class="countableEC" hidden></td>--}}
{{--            </tr>--}}

{{--            <tr>--}}
{{--                <th scope="col" colspan="4">Personality</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">Personality 1</th>--}}
{{--                <td>1,25</td>--}}
{{--                <td></td>--}}
{{--                <td>Personality</td>--}}
{{--                <td class="countableEC" hidden>1.25</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">Personality 2</th>--}}
{{--                <td>1,25</td>--}}
{{--                <td></td>--}}
{{--                <td>Personality</td>--}}
{{--                <td class="countableEC" hidden></td>--}}
{{--            </tr>--}}


{{--            <tr>--}}
{{--                <th scope="col" colspan="4">Extra</th>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <!-- stukje javascript om de kleuren aan te passen voor BSA in js folder -->--}}
{{--                <th scope="row">BSA</th>--}}
{{--                <td id="finalEC">0</td>--}}
{{--                <td id="passed">Gehaald</td>--}}
{{--                <td id="notPassed">Niet gehaald</td>--}}
{{--            </tr>--}}
{{--        </table>--}}
    </div>

    <div>
        <aside>
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
        </aside>
    </div>
</main>



<footer id="dbBottom">
    <a href="#top">
        <h2 class="footerDesign">Dashboard</h2>
    </a>
</footer>

<script src="js/dashboard.js"></script>
</body>

</html>
