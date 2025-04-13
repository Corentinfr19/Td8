<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Validators\EstUnEntier;

$valeur = 123;

if (EstUnEntier::valider($valeur)) {
    echo "'$valeur' est un entier.";
} else {
    echo "'$valeur' n'est pas un entier.";
}