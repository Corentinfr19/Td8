<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Validators\EstUnReel;

$valeur = 123.45;

if (EstUnReel::valider($valeur)) {
    echo "'$valeur' est un nombre réel.";
} else {
    echo "'$valeur' n'est pas un nombre réel.";
}