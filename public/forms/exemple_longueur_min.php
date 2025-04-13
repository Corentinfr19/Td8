<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Validators\LongueurMin;

$chaine = 'test';
$min = 4;

if (LongueurMin::valider($chaine, $min)) {
    echo "'$chaine' a une longueur supérieure ou égale à $min.";
} else {
    echo "'$chaine' a une longueur inférieure à $min.";
}