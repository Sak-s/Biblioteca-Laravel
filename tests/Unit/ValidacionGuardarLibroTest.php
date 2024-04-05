<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Libro;

class ValidacionGuardarLibroTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function formulario_no_se_puede_enviar_con_campos_vacios()
    {
        $response = $this->post('/guardar', []);

        $response->assertSessionHasErrors([
            'nombreLibro',
            'precioLibro',
            'isbn',
        ]);
    }

    /** @test */
    public function formulario_no_se_puede_enviar_con_isbn_demasiado_largo()
    {
        $data = [
            'nombreLibro' => 'Libro de Prueba',
            'precioLibro' => 20.5,
            'isbn' => '123456789012345678901', // ISBN demasiado largo
        ];

        $response = $this->post('/guardar', $data);

        $response->assertSessionHasErrors([
            'isbn',
        ]);
    }

    /** @test */
    public function formulario_se_envia_con_datos_validos()
    {
        $data = [
            'nombreLibro' => 'Libro de Prueba',
            'precioLibro' => 20.5,
            'isbn' => '1234567890',
        ];

        $response = $this->post('/guardar', $data);

        $response->assertSessionHasNoErrors();
    }

    /** @test */
    public function no_se_puede_guardar_un_libro_con_precio_que_contenga_letras()
    {
        // Datos del libro con precio que contiene letras
        $data = [
            'nombreLibro' => 'Libro con Precio Incorrecto',
            'precioLibro' => 'Precio Inválido',
            'isbn' => '1234567890',
        ];

        // Realizar una solicitud POST a la ruta de guardar libro con datos incorrectos
        $response = $this->post('/guardar', $data);

        // Verificar que la redirección no sea exitosa (ya que debería haber errores de validación)
        $response->assertSessionHasErrors(['precioLibro']);

        // Verificar que el libro no se haya guardado en la base de datos
        $this->assertDatabaseMissing('libros', ['nombreLibro' => 'Libro con Precio Incorrecto']);
    }
}
