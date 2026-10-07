<?php

namespace Tests\Feature;

use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

// Ampliación opcional: estos cuatro casos se pueden trabajar después.
class ClientePantallasTest extends TestCase
{
    use RefreshDatabase;

    public function test_abrir_alta(): void
    {
        $respuesta = $this->get('/clientes/create');

        $respuesta->assertOk();
        $respuesta->assertViewIs('clientes.create');
    }

    public function test_mostrar_detalle(): void
    {
        $datos = ['nombre' => 'Cliente de prueba', 'email' => 'cliente@example.com'];
        $cliente = Cliente::create($datos);

        $respuesta = $this->get('/clientes/' . $cliente->id);

        $respuesta->assertOk();
        $respuesta->assertViewIs('clientes.show');
        $respuesta->assertSee($datos['email']);
    }

    public function test_abrir_edicion(): void
    {
        $datos = ['nombre' => 'Cliente de prueba', 'email' => 'cliente@example.com'];
        $cliente = Cliente::create($datos);

        $respuesta = $this->get('/clientes/' . $cliente->id . '/edit');

        $respuesta->assertOk();
        $respuesta->assertViewIs('clientes.edit');
        $respuesta->assertSee($datos['nombre']);
    }

    public function test_responder_404(): void
    {
        $respuesta = $this->get('/clientes/999');

        $respuesta->assertNotFound();
    }
}
