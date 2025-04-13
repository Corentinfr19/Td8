<?php

namespace App\Validators;

class LongueurMax
{
    public static function valider($valeur, $max)
    {
        return strlen($valeur) <= $max;
    }
}