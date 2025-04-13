<?php

namespace Tests\Validators;

use PHPUnit\Framework\TestCase;
use App\Validators\EstUnEmail;

class EstUnEmailTest extends TestCase
{
    public function testValiderEmailValide()
    {
        // Test avec un email valide
        $this->assertTrue(EstUnEmail::valider('test@example.com'));
    }

    public function testValiderEmailInvalide()
    {
        // Test avec un email invalide
        $this->assertFalse(EstUnEmail::valider('not-a-valid-email'));
        $this->assertFalse(EstUnEmail::valider('test@com'));
    }
}
