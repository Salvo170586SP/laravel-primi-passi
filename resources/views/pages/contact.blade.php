<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<header>
        <h1>Hello World</h1>
        <nav>
            <a href="{{ route('home')}}">HOME</a>
            <a href="{{ route('biograpy')}}">CHI SONO</a>
            <a href="{{ route('gallery')}}">GALLERY</a>
            <a href="{{ route('passion')}}">LE MIE PASSIONI</a>
            <a href="{{ route('contact')}}">CONTACT</a>
        </nav>
    </header>
    <main>
    <h2>CONTATTI</h2>
    <ul>
        <li>NUMERO DI TELEFONO: {{ $number }}</li>
        <li>INDIRIZZO: {{ $address }}</li>
        <li>CITTA': {{ $city }}</li>
        <li>SITO WEB: {{ $url }}</li>      
    </ul>
    </main>
</body>
</html>