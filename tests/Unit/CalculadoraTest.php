<?php

namespace Tests\Unit;

use App\Services\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function test_suma_positivos(): void
    {
        // Preparar: necesitamos una calculadora.
        $calculadora = new Calculadora();

        // Ejecutar: llamamos al método que queremos comprobar.
        $resultado = $calculadora->sumar(2, 3);

        // Comprobar: el resultado conocido de 2 + 3 es 5.
        $this->assertSame(5, $resultado);
    }

    public function test_suma_con_un_numero_negativo(): void
    {
        $calculadora = new Calculadora();

        $resultado = $calculadora->sumar(-2, 3);

        $this->assertSame(1, $resultado);
    }

    public function test_suma_con_cero(): void
    {
        $calculadora = new Calculadora();

        $resultado = $calculadora->sumar(0, 7);

        $this->assertSame(7, $resultado);
    }
}
