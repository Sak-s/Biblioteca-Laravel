<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="{{ asset('css/stylesIndex.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header-container">
        <div class="put-logo">
            <img class="img-logo" src="{{ asset('img/logo.png') }}" alt="Logo">
        </div>
        <div class="put-title">
            CULTURA Y LIBROS
        </div>
        <div class="put-input">
            <input class="search" type="search">
        </div>
        <nav class="container-botones">
            <a class="links" href="#">INICIO</a>
            <a class="links" href="{{ url('/crudLibros') }}">LIBROS</a>
        </nav>
    </header>
    <main class="main-container">
        <div class="title-img-container">
            <div class="put-subtitle">Bienvenido:</div>
            <div class="put-img">
                <img class="img-try" src="{{ asset('img/img-main.png') }}" alt="Imagen Portada">
            </div>
        </div>
        <div class="text-container">
            <div class="card">
                <div class="mitad">
                    <div class="title">
                        Crimen y Castigo
                    </div>
                </div>
                <div class="mitad">
                    Él era tan joven que, a pesar de todos los rasgos angustiados de su rostro, daba la impresión de que aún no había llegado al umbral de la vida, de que, a pesar de sus sufrimientos, aún era un chico, que sólo empezaba a vivir y que aún tenía todo por delante.
                </div>
            </div>
            <div class="card">
                <div class="mitad">
                    <img class="libro" src="{{ asset('img/libros.png') }}" alt="Imagen Libro">
                </div>
                <div class="mitad">
                    En la tranquila biblioteca, rodeado de libros antiguos y susurros de conocimiento, me sumergí en una historia que me atrapó desde la primera página. Las palabras cobraron vida, los personajes saltaron del papel y me encontré viajando a través del tiempo y el espacio sin moverme de mi asiento. En ese rincón silencioso, descubrí el poder de la literatura para transportarnos a lugares lejanos y hacernos vivir aventuras inolvidables.
                </div>
            </div>
        </div>
    </main>
    <footer class="footer-container"></footer>
</body>
</html>
