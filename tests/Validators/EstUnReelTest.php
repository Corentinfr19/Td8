<?php

namespace Tests\Validators;

use App\Validators\EstUnReel;
use PHPUnit\Framework\TestCase;

class EstUnReelTest extends TestCase
{
    public function testReelValide()
    {
        $this->assertTrue(EstUnReel::valider(123.45));
        $this->assertTrue(EstUnReel::valider('123.45'));
    }

    public function testReelInvalide()
    {
        $this->assertFalse(EstUnReel::valider('abc'));
    }
}