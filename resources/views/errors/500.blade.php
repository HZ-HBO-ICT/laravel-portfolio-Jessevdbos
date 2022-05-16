<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Request::path() === '/' ? 'homepage' : Request::path() }}</title>
</head>

<body style="background-image: url('http://i.imgur.com/8ZchqIO.jpg'); background-size: cover">
<div style="background-color: rgb(256,256,256, 0.8); border-radius: 3em; align-content: center; text-align: center; width: 30%; position: absolute; top: 20%; left: 15%">
    <div>
        <h1>500</h1>
        <p>De floor waar naar is gezocht kon niet geladen worden.</p>
    </div>
    <div>
        <p>Herlaad je game of informeer je <a href="/teammate-error-500">teammates</a></p>
        <br>
        <a href="/"><- Ga terug naar de homepage</a>
    </div>
</div>
</body>
</html>

