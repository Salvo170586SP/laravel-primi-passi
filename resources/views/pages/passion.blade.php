<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passion</title>
    <style>
        main {
            padding: 20px;
        }

        .box-img{
            display: flex;
        }
        img {
            width: 350px;
        }
    </style>
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
    <h2>PASSIONI</h2>
        <div class="box-img">
            <figure>
                <img src="https://www.intramundi.it/wp-content/uploads/2021/09/CIASPOLE-CIMONE-500x305.jpg" alt="mountaign">
                <figcaption>NORDIC WALK</figcaption>
            </figure>
            <figure>
            <img src="https://www.teleclubitalia.it/wp-content/uploads/2022/03/lino-banfi-compie-85-anni-e-svela-un-segreto-sugli-azzurri-asono-in-contatto-con-il-ct-mancinia-wide-site-rwpbk.jpg" alt="mountaign">
                <figcaption>FILM DI LINO BANFI</figcaption>
            </figure>
            <figure>
            <img src="https://i0.wp.com/www.thegiornale.it/wp-content/uploads/2018/05/larte-di-disegnare-a-matita.jpg?resize=800%2C448&ssl=1" alt="mountaign">
                <figcaption>DISEGNO</figcaption>
            </figure>
            <figure>
            <img src="https://www.raiscuola.rai.it/cropgd/900x520/dl/img/2021/03/25/1616683561166_1582717587391_technology-1283624_1920.jpg" alt="mountaign">
                <figcaption>WEB CODING</figcaption>
            </figure>
        </div>
    </main>
</body>

</html>