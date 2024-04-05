<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Libro</title>
    <link rel="stylesheet" href="{{ asset('css/stylesLibroAdd.css') }}">
</head>

<body>
    <div class="modal-container" id="modal-ver{{ $libro->id }}">
        <div class="form-container">
            <header class="put-title">
                <div class="divi"></div>
                <div class="divi">VER LIBRO</div>
                <div class="divi">
                    <button type="button" class="botoncito" id="cerrar-ver">X</button>
                </div>
            </header>
            <div class="cuerpo-form">
                <div class="inps">
                    <div class="subtitle">NOMBRE DEL LIBRO</div>
                    <div class="input">
                        <input type="hidden" value="{{ $libro->id }}" name="libroId">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="text" name="nombreLibro" value="{{ $libro->nombreLibro }}" readonly>
                    </div>
                    <div class="subtitle">PRECIO</div>
                    <div class="input">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="number" name="precioLibro" value="{{ $libro->precioLibro }}" readonly>
                    </div>
                </div>
                <div class="second">
                    <div class="subtitle">ISBN</div>
                    <div class="input">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="text" name="isbn" value="{{ $libro->isbn }}" readonly>
                    </div>
                </div>
            </div>
            <!-- Aquí podrías agregar botones o enlaces para cerrar el modal o realizar otras acciones -->
        </div>
    </div>
</body>

</html>
