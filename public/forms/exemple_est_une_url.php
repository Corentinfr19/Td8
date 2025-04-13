<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Validators\EstUneUrl;

$valeur = 'https://www.example.com';

if (EstUneUrl::valider($valeur)) {
    echo "'$valeur' est une URL valide.";
} else {
    echo "'$valeur' n'est pas une URL valide.";
}