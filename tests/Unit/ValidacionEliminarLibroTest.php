<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Libro;

class ValidacionEliminarLibroTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function no_puede_eliminar_un_libro_inexistente()
    {
        // Crear un ID de libro inexistente
        $libroIdInexistente = 9999;

        // Realizar una solicitud DELETE a la ruta de eliminación del libro
        $response = $this->delete("/libros/{$libroIdInexistente}/eliminar");

        // Verificar que la redirección sea exitosa
        $response->assertNotFound();

        // Verificar que el libro no se haya eliminado de la base de datos
        $this->assertDatabaseMissing('libros', ['id' => $libroIdInexistente]);
    }
}
