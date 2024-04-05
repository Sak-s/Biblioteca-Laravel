<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseConnectionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testDatabaseConnection()
    {
        try {
            DB::connection()->getPdo();
            $this->assertTrue(true); 
        } catch (\Exception $e) {
            $this->fail('No se pudo establecer la conexión a la base de datos: ' . $e->getMessage());
        }
    }
}
