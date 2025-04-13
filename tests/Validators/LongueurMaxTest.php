<?php

namespace Tests\Validators;

use App\Validators\LongueurMax;
use PHPUnit\Framework\TestCase;

class LongueurMaxTest extends TestCase
{
    public function testLongueurValide()
    {
        $this->assertTrue(LongueurMax::valider('test', 4));
        $this->assertTrue(LongueurMax::valider('test', 5));
    }

    public function testLongueurInvalide()
    {
        $this->assertFalse(LongueurMax::valider('test', 3));
    }
}