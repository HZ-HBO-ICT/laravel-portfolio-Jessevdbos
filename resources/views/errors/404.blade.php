<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Request::path() === '/' ? 'homepage' : Request::path() }}</title>
</head>

<body style="background-image: url('https://wallpaperaccess.com/full/2790179.jpg'); background-size: cover">
    <div style="background-color: rgb(256,256,256, 0.8); border-radius: 3em; align-content: center; text-align: center; width: 30%; position: absolute; top: 50%; left: 35%">
        <div>
            <h1>404</h1>
            <p>De floor waar naar is gezocht kon niet gevonden worden</p>
        </div>
        <div>
            <p>mocht u hulp nodig hebben contact <a href="/teammate-error-404">support</a></p>
            <br>
            <a href="/"><- Ga terug naar de homepage</a>
        </div>
    </div>
</body>
</html>

