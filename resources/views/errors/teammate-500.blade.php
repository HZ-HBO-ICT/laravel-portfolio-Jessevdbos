<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Request::path() === '/' ? 'homepage' : Request::path() }}</title>
</head>

<body style="background-image: url('https://files.wallpaperpass.com/2019/10/sword%20art%20online%20wallpaper%2070%20-%202048x1152-768x432.png'); background-size: cover">
<div style="background-color: rgb(256,256,256, 0.8); border-radius: 3em; align-content: center; text-align: center; width: 30%; position: absolute; top: 20%; left: 15%">
    <div>
        <h1>rapporteer hier wat je hebt ontdekt</h1>
        <form method="post" action="{{ route('errors.store') }}">
            @csrf

            <label for="name">Name</label>
            <input class="@error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Voer hier een naam in">
            @error('name')
            <div class="alert alert-danger" style="color: red">Error, de naam die is ingevoerd is niet toegestaan. Controleer de spelling of gebruik een andere naam.</div>
            @enderror
            <br>
            <label for="code">Error code</label>
            <input class="@error('code') is-invalid @enderror" type="text" name="code" id="code" placeholder="voer hier de Error code in">
            @error('code')
            <div class="alert alert-danger" style="color: red">Error, de Error code die is ingevoerd is niet toegestaan. Controleer de spelling of gebruik een andere code.</div>
            @enderror
            <br>
            <label for="opmerking">Opmerkingen</label>
            <input class="@error('opmerking') is-invalid @enderror" type="text" name="opmerking" id="opmerking" placeholder="voer hier uw opmerking in" required>
            @error('opmerking')
            <div class="alert alert-danger" style="color: red">Error, de Opmerking die is ingevoerd is niet toegestaan. Controleer de spelling of gebruik een andere opmerking.</div>
            @enderror
            <br>
            <button>Submit</button>
        </form>
    </div>
</div>
</body>
</html>

