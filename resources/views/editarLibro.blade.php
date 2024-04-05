<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="{{ asset('css/stylesLibroAdd.css') }}">
</head>

<body>
    <div class="modal-container" id="modal-editar{{ $libro->id}}">
        <form class="form-container" action="{{ route('update', $libro->id) }}" method="post">
            @csrf
            <header class="put-title">
                <div class="divi"></div>
                <div class="divi">EDITAR LIBRO</div>
                <div class="divi"> 
                    <button type="button" class="botoncito" id="cerrar-editar">X</button>
                </div>
            </header>
            <div class="cuerpo-form">
                <div class="inps">
                    <div class="subtitle">NOMBRE DEL LIBRO</div>
                    <div class="input">
                        <input type="hidden" value="{{ $libro->id }}" name="id">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="text" name="nombreLibro" value="{{ $libro->nombreLibro }}" required>
                    </div>
                    <div class="subtitle">PRECIO</div>
                    <div class="input">
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="number" name="precioLibro" value="{{ $libro->precioLibro }}" required>
                    </div>
                </div>
                <div class="second">
                    <div class="subtitle">ISBN</div>
                    <div class="input"> 
                        <input style="width: 100%; height: 100%; border: solid #004aad 0.4vw; border-radius: 0.5vw;" type="text" name="isbn" value="{{ $libro->isbn }}" required>
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
