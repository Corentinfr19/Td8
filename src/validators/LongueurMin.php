<?php

namespace App\Validators;

class LongueurMin
{
    public static function valider($valeur, $min)
    {
        return strlen($valeur) >= $min;
    }
}