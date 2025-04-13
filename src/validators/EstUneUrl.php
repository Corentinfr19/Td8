<?php

namespace App\Validators;

class EstUneUrl
{
    public function validate($value)
    {
        // Utilisation de filter_var pour valider l'URL
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }
}
