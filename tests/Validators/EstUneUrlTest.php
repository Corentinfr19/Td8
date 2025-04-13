<?php

namespace Tests\Validators;

use App\Validators\EstUneUrl;
use PHPUnit\Framework\TestCase;

class EstUneUrlTest extends TestCase
{
    public function testUrlValide()
    {
        $validator = new EstUneUrl();

        // Test avec une URL valide
        $this->assertTrue($validator->validate("https://www.example.com"));
    }

    public function testUrlInvalide()
    {
        $validator = new EstUneUrl();

        // Test avec une URL invalide
        $this->assertFalse($validator->validate("invalid-url"));
    }
}
