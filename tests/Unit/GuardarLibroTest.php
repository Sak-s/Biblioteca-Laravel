<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Libro;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuardarLibroTest extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function it_can_guardar_a_new_libro()
    {
        
        $data = [
            'nombreLibro' => 'Libro de Prueba',
            'precioLibro' => 20.5,
            'isbn' => '1234567890',
        ];

        
        $response = $this->post('/guardar', $data);

        
        $response->assertRedirect();

        
        $this->assertDatabaseHas('libros', [
            'nombreLibro' => 'Libro de Prueba',
            'precioLibro' => 20.5,
            'isbn' => '1234567890',
        ]);
    }
}
