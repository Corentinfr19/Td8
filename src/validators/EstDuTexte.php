<?php

namespace App\Validators;

class EstDuTexte
{
    public function validate($value)
    {
        // Logic pour valider que la valeur est du texte
        return is_string($value);
    }
}
