<?php
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Libro;

class ValidacionActualizacionLibroTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function no_puede_actualizar_un_libro_con_datos_invalidos()
    {
        
        $libro = Libro::factory()->create();

        
        $data = [
            'nombreLibro' => '', // Nombre del libro vacío (no válido)
            'precioLibro' => 'abc', // Precio no numérico (no válido)
            'isbn' => '123456789012345678901', // ISBN demasiado largo (no válido)
        ];

        
        $response = $this->post("/libros/{$libro->id}/actualizar", $data);

        
        $response->assertRedirect();

       
        $this->assertDatabaseMissing('libros', [
            'id' => $libro->id,
            'nombreLibro' => $data['nombreLibro'],
            'precioLibro' => $data['precioLibro'],
            'isbn' => $data['isbn'],
        ]);
    }
}

