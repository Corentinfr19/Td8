<?php

namespace Tests\Validators;

use App\Validators\EstDuTexte;
use PHPUnit\Framework\TestCase;

class EstDuTexteTest extends TestCase
{
    public function testTexteValide()
    {
        $validator = new EstDuTexte();

        // Test avec une chaîne valide
        $this->assertTrue($validator->validate("Ceci est du texte"));

        // Test avec un entier (qui devrait échouer)
        $this->assertFalse($validator->validate(123));
    }
}
