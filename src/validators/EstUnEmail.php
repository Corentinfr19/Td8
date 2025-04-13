<?php
namespace App\Validators;

class EstUnEmail
{
    public static function valider($valeur)
    {
        return filter_var($valeur, FILTER_VALIDATE_EMAIL) !== false;
    }
}
