<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
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