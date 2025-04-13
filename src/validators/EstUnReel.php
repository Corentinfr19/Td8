<?php

namespace App\Validators;

class EstUnReel
{
    public static function valider($valeur)
    {
        return filter_var($valeur, FILTER_VALIDATE_FLOAT) !== false;
    }
}