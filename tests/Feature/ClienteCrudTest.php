<?php

namespace Tests\Feature;

use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClienteCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_guardar(): void
    {
        // 1. Preparar. Podés cambiar estos valores por otros válidos.
        $datos = [
            'nombre' => 'Cliente de prueba',
            'email' => 'cliente@example.com',
        ];

        // 2. Ejecutar. Enviamos los datos al CRUD.
        $respuesta = $this->post('/clientes', $datos);

        // 3. Comprobar. Deben guardarse los mismos datos que enviamos.
        $this->assertDatabaseHas('clientes', $datos);
        $respuesta->assertRedirect('/clientes');
        $this->assertDatabaseCount('clientes', 1);
    }

    public function test_listar(): void
    {
        $datos = [
            'nombre' => 'Cliente de prueba',
            'email' => 'cliente@example.com',
        ];
        Cliente::create($datos);

        $respuesta = $this->get('/clientes');

        $respuesta->assertOk();
        // Usamos el nombre que preparó ESTA prueba.
        $respuesta->assertSee($datos['nombre']);
    }

    public function test_actualizar(): void
    {
        $datos = [
            'nombre' => 'Cliente de prueba',
            'email' => 'cliente@example.com',
        ];
        $cliente = Cliente::create($datos);
        $nuevosDatos = [
            'nombre' => 'Cliente actualizado',
            'email' => 'actualizado@example.com',
        ];

        $respuesta = $this->put('/clientes/' . $cliente->id, $nuevosDatos);

        $respuesta->assertRedirect('/clientes');
        // El mismo ID debe contener ambos valores nuevos.
        $this->assertDatabaseHas('clientes', [
            'id' => $cliente->id,
            'nombre' => $nuevosDatos['nombre'],
            'email' => $nuevosDatos['email'],
        ]);
        // Esperado primero; real después. fresh() vuelve a leer la base.
        $this->assertSame($nuevosDatos['nombre'], $cliente->fresh()->nombre);
        $this->assertDatabaseCount('clientes', 1);
    }

    public function test_eliminar(): void
    {
        $datos = [
            'nombre' => 'Cliente de prueba',
            'email' => 'cliente@example.com',
        ];
        $cliente = Cliente::create($datos);

        $respuesta = $this->delete('/clientes/' . $cliente->id);

        $this->assertDatabaseMissing('clientes', ['id' => $cliente->id]);
        $respuesta->assertRedirect('/clientes');
        $this->assertDatabaseCount('clientes', 0);
    }

    public function test_rechazar_datos_invalidos(): void
    {
        $datosInvalidos = ['nombre' => '', 'email' => 'correo-invalido'];

        $respuesta = $this->from('/clientes/create')
            ->post('/clientes', $datosInvalidos);

        $respuesta->assertSessionHasErrors(['nombre', 'email']);
        $this->assertDatabaseCount('clientes', 0);
        $respuesta->assertRedirect('/clientes/create');
    }
}
