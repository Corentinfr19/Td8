<?php

namespace App\Validators;

class EstUnEntier
{
    public static function valider($valeur)
    {
        return filter_var($valeur, FILTER_VALIDATE_INT) !== false;
    }
}