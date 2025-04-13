<?php

namespace Tests\Validators;

use PHPUnit\Framework\TestCase;
use App\Validators\LongueurMin;

class LongueurMinTest extends TestCase
{
    public function testLongueurValide()
    {
        // Test pour une chaîne avec une longueur suffisante
        $this->assertTrue(LongueurMin::valider('Bonjour', 5));
    }

    public function testLongueurInvalide()
    {
        // Test pour une chaîne avec une longueur insuffisante
        $this->assertFalse(LongueurMin::valider('Hi', 5));
    }

    public function testLongueurEgaleMin()
    {
        // Test pour une chaîne qui a exactement la longueur minimale
        $this->assertTrue(LongueurMin::valider('Hello', 5));
    }
}
