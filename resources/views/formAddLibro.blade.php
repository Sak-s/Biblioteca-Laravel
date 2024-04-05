<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link rel="stylesheet" href="{{ asset('css/stylesLibroAdd.css') }}">
</head>
<body>
    <div class="modal-container" id="modal-main">
        <form class="form-container" action="{{ url('/guardar') }}" method="post">
            @csrf
            <header class="put-title">
                <div class="divi"></div>
                <div class="divi">AGREGAR LIBRO</div>
                <div class="divi">
                    <input type="button" value="X" id="cerrar" onclick="cerrarModalCito()" class="botoncito">
                </div>
            </header>
            <div class="cuerpo-form">
                <div class="inps">
                    <div class="subtitle">NOMBRE DEL LIBRO</div>
                    <div class="input">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="text" name="nombreLibro">
                    </div>
                    <div class="subtitle">PRECIO</div>
                    <div class="input">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="number" name="precioLibro">
                    </div>
                </div>
                <div class="second">
                    <div class="subtitle">ISBN</div>
                    <div class="input">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="text" name="isbn">
                    </div>
                </div>
            </div>
            <div class="boton-container">
                <input class="btn" type="submit" value="AÑADIR LIBRO">
            </div>
        </form>
    </div>
</body>
</html>
