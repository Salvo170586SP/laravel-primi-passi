<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>

<body>
    <header>
        <h1>Hello World</h1>
        <h2>GALLERY</h2>
        <nav>
            <a href="{{ route('home')}}">HOME</a>
            <a href="{{ route('biograpy')}}">CHI SONO</a>
            <a href="{{ route('gallery')}}">GALLERY</a>
            <a href="{{ route('passion')}}">LE MIE PASSIONI</a>
            <a href="{{ route('contact')}}">CONTACT</a>
        </nav>
    </header>
    <main>
        <img src="https://www.liberopensiero.eu/wp-content/uploads/2021/05/535baeeb-a332-49f9-853f-1efad5527b34.jpg" alt="">
        <img src="https://media.rds.it/web/wp-content/uploads/2021/04/parco-green-list.jpg" alt="">
        <img src="https://www.frasimania.it/wp-content/uploads/2021/02/poesie-natura-700x490.jpg" alt="">
        <img src="https://cdn.studenti.stbm.it/images/2021/10/13/tema-sul-rapporto-uomo-natura-nella-letteratura-orig.jpeg" alt="">
    </main>
</body>

</html>