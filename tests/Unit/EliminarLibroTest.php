<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Libro;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EliminarLibroTest extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function it_can_delete_a_libro()
    {
        // Crear un libro de prueba
        $libro = Libro::create([
            'nombreLibro' => 'Libro a Eliminar',
            'precioLibro' => 50.75,
            'isbn' => '1122334455',
        ]);

        // Realizar una solicitud DELETE a la ruta de eliminación con el ID del libro
        $response = $this->delete("/libros/{$libro->id}/eliminar");

        // Verificar que la redirección sea exitosa
        $response->assertRedirect(route('crudLibros'));

        // Verificar que el libro se haya eliminado de la base de datos
        $this->assertDatabaseMissing('libros', ['id' => $libro->id]);
    }
}
