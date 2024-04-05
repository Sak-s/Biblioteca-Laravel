<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta de Eliminación</title>
    <link rel="stylesheet" href="{{ asset('css/stylesAlerta.css') }}">
</head>
<body>
    <div id="alerta" class="container-alerta">
        @foreach($libros as $libro)
        <form action="{{ route('destroy', $libro->id) }}"  class="alerta-body" method="post">
            @csrf
            @method('DELETE')
            <div class="part-main-info">
                <img class="icono" src="{{ asset('img/giphy.gif') }}" alt="">   
                <div class="mete-info">
                    <div class="text-info">
                        ¿Estás seguro de eliminar el libro con el ID: {{ $libro->id }}?
                    </div>
                    <div class="put-id">
                        <input type="hidden" name="libroId" value="{{ $libro->id }}">
                    </div>
                </div>
            </div>
            <div class="part-put-buttons">
                <input class="botoncitos" type="submit" value="SI">
                <input class="botoncitos" type="button" id="zerrar" value="NO">
            </div>
        </form>
        @endforeach
    </div>
</body>
</html>
