<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Validators\LongueurMax;

$chaine = 'test';
$max = 4;

if (LongueurMax::valider($chaine, $max)) {
    echo "'$chaine' a une longueur inférieure ou égale à $max.";
} else {
    echo "'$chaine' a une longueur supérieure à $max.";
}