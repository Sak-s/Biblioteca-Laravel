<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/crudLibros', function () {
    return view('crudLibros');
});

Route::get('/editarLibro', function () {
    return view('editarLibro');
});

Route::get('/formulario', function () {
    return view('verFormulario');
});

Route::controller(LibroController::class)->group(function(){

    Route::post('/guardar', 'guardar')->name('guardar');

    Route::get('/crudLibros', [LibroController::class, 'index'])->name('crudLibros');

    Route::post('/libros/{id}/actualizar', [LibroController::class, 'update'])->name('update');

    Route::delete('/libros/{id}/eliminar', [LibroController::class, 'destroy'])->name('destroy');

}); 


