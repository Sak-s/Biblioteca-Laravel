<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Libro;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActualizarLibroTest extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function it_can_update_a_libro()
    {
        // Crear un libro de prueba
        $libro = Libro::create([
            'nombreLibro' => 'Libro Original',
            'precioLibro' => 30.5,
            'isbn' => '0987654321',
        ]);

        // Datos de actualización
        $data = [
            'nombreLibro' => 'Libro Actualizado',
            'precioLibro' => 25.5,
            'isbn' => '0987654321', // Mismo ISBN que el libro original
        ];

        // Realizar una solicitud POST a la ruta de actualización con el ID del libro
        $response = $this->post("/libros/{$libro->id}/actualizar", $data);

        // Verificar que la redirección sea exitosa
        $response->assertRedirect(route('crudLibros'));

        // Verificar que el libro se haya actualizado en la base de datos
        $this->assertDatabaseHas('libros', [
            'id' => $libro->id,
            'nombreLibro' => 'Libro Actualizado',
            'precioLibro' => 25.5,
            'isbn' => '0987654321',
        ]);
    }

    /** @test */
    public function no_puede_actualizar_un_libro_inexistente()
    {
        $data = [
            'nombreLibro' => 'Libro Actualizado',
            'precioLibro' => 19.99,
            'isbn' => '9789876543210',
        ];
    
        $response = $this->post("/libros/9999/actualizar", $data);
    
        $response->assertNotFound();
    }
}
