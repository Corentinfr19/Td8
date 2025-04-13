<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Validators\EstUnEmail;

$email = 'test@example.com';
if (EstUnEmail::valider($email)) {
    echo "$email est un email valide.";
} else {
    echo "$email n'est pas un email valide.";
}

$email = 'testexample.com';
if (EstUnEmail::valider($email)) {
    echo "$email est un email valide.";
} else {
    echo "$email n'est pas un email valide.";
}