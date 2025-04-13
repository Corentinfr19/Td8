<?php

namespace Tests\Validators;

use App\Validators\EstUnEntier;
use PHPUnit\Framework\TestCase;

class EstUnEntierTest extends TestCase
{
    public function testEntierValide()
    {
        $this->assertTrue(EstUnEntier::valider(123));
        $this->assertTrue(EstUnEntier::valider('123'));
    }

    public function testEntierInvalide()
    {
        $this->assertFalse(EstUnEntier::valider('123.45'));
        $this->assertFalse(EstUnEntier::valider('abc'));
    }
}