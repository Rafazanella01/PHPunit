<?php

namespace Tests\Unit;

use App\Models\Soma;
use PHPUnit\Framework\TestCase;

    class MinhaClasseTest extends TestCase
    {
        public function testSomaNegativos()
        {
            $soma = new Soma();
            $resultado = $soma->soma(-3, -3);
            $this->assertEquals(-6, $resultado);
        }

        public function testSomaNegativoPositivo()
        {
            $soma = new Soma();
            $resultado = $soma->soma(-3, 4);
            $this->assertEquals(1, $resultado);
        }

        // Verifica se a soma de um número positivo com 0 retorna o próprio número positivo 
        public function testSomaZero()
        {
            $soma = new Soma();
            $resultado = $soma->soma(0, 5);
            $this->assertEquals(5, $resultado);
        }
    }

?> 