<?php

namespace Tests\Unit;

use App\Models\StringManipulator;
use PHPUnit\Framework\TestCase;

    class StringManipulatorTest extends TestCase
    {

        // Testes Vogais

        public function testVogaisSemVogais()
        {
            $texto = '28092004';
            $classe = new StringManipulator();

            $vogais = $classe->countVowels($texto);

            $this->assertEquals(0, $vogais);
        }

        public function testVogaisMinuscula()
        {
            $texto = 'aeiou';
            $classe = new StringManipulator();

            $vogais = $classe->countVowels($texto);

            $this->assertEquals(5, $vogais);
        }

        public function testVogaisMaiuscula()
        {
            $texto = 'AEIOU';
            $classe = new StringManipulator();

            $vogais = $classe->countVowels($texto);

            $this->assertEquals(5, $vogais);
        }

        public function testVogaisMinusculaMaiuscula()
        {
            $texto = 'AEioU';
            $classe = new StringManipulator();

            $vogais = $classe->countVowels($texto);

            $this->assertEquals(5, $vogais);
        }

        public function testVogais()
        {
            $texto = 'Oii Rafa';
            $classe = new StringManipulator();

            $vogais = $classe->countVowels($texto);

            $this->assertEquals(5, $vogais);
        }

        // Capitalize strings

        public function testCapitalizeStrings()
        {
            $texto1 = 'o rafa é lindo';
            $texto2 = ' ';
            $classe = new StringManipulator();

            $capitalize1 = $classe->capitalizeString($texto1);
            $capitalize2 = $classe->capitalizeString($texto2);

            $this->assertEquals('O Rafa é Lindo', $capitalize1);
            $this->assertEquals(' ', $capitalize2);
        }

        public function testConcatenateStrings()
        {
            $texto1 = 'Meu nome é';
            $texto2 = 'Rafael';

            $classe = new StringManipulator();
            $Concatenador = $classe->concatenateStrings($texto1, $texto2);

            $this->assertEquals('Meu nome é Rafael', $Concatenador);
        }
    }

?> 