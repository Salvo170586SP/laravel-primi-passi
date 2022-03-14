<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Hello World</h1>
        <nav>
            <a href="{{ route('biograpy')}}">CHI SONO</a>
            <a href="{{ route('gallery')}}">GALLERY</a>
            <a href="{{ route('passion')}}">LE MIE PASSIONI</a>
            <a href="{{ route('contact')}}">CONTACT</a>
        </nav>
    </header>

    <ul>
        <li>NOME: {{ $name }}</li>
        <li>COGNOME: {{ $surname }}</li>
        <li>ETA': {{ $age }}</li>
        <li>CITTA' DI NASCITA: {{ $born }}</li>
        <li>PASSIONI: 
            <ol>
                @foreach($passions as $passion)
                <li>{{ $passion }}</li>
                @endforeach
            </ol>
        </li>
    </ul>
</body>

</html>