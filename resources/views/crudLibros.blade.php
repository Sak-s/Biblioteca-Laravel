<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="{{ asset('css/stylesCrudLibros.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="desplazar-button">
        <button id="izq" class="ton"><i class="bi bi-chevron-left"></i></button>
        <button id="der" class="ton"><i class="bi bi-chevron-right"></i></button>
    </div>
        <div>@include('formAddLibro')</div>
        <div>@include('alertaEliminarLibro')</div> 
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
            <a class="links" href="{{ url('/') }}">INICIO</a>
        </nav>
    </header>
    <main class="main-container">
        <div class="title-tabla-container">
            <div class="middle">
                Solicitud de libros
            </div>
            <div class="middle">
                <div class="boton-container" onclick="desplegarModal()">
                    <div class="put-button">
                        <div class="circulo">+</div>
                    </div>
                    <div class="text">NUEVO LIBRO</div>
                </div>
            </div>
        </div>
        <div class="titles-table">
            <div class="row-subtitle">ID LIBRO</div>
            <div class="row-subtitle">NOMBRE</div>
            <div class="row-subtitle">PRECIO</div>
            <div class="row-subtitle">ISBN</div>
            <div class="row-subtitle">ACCIONES</div>
        </div>
        <div id="tabla" class="tabla-container">
            
            @foreach($libros as $libro)
            <div class="row-content">
                @include('editarLibro')
                @include('verFormulario')
                <div class="divisions">{{ $libro->id }}</div>
                <div class="divisions">{{ $libro->nombreLibro }}</div>
                <div class="divisions">{{ $libro->precioLibro }}</div>
                <div class="divisions">{{ $libro->isbn }}</div>
                <div class="divisions" id="select-buttons">
                    <a class="edit-buttons see-button" href="" data-id="{{ $libro->id }}"><i class="bi bi-eye-fill"></i></a>
                    <a class="edit-buttons update-button" href="" data-id="{{ $libro->id }}"><i class="bi bi-pen-fill"></i></a>
                    <a class="edit-buttons delete-button" href="" data-id="{{ $libro->id }}"><i class="bi bi-trash3-fill"></i></a>
                </div>
            </div>
            @endforeach 
        </div>
    </main>
    <footer class="footer-container"></footer>
    <script>
        const modal = document.getElementById("modal-main")
        function desplegarModal() {
            modal.classList.add("ver")
        }
        function cerrarModalCito() {
            modal.classList.remove("ver")
        }
    </script>
    <script src="{{ asset('js/scriptAlerta.js') }}"></script>
</body>
</html>
