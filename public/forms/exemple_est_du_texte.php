<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Validators\EstDuTexte;

$valeur = 'texte';

if (EstDuTexte::valider($valeur)) {
    echo "'$valeur' est du texte.";
} else {
    echo "'$valeur' n'est pas du texte.";
}