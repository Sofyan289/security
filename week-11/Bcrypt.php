<?php

$givenPassword = $argv[1];

$hash = password_hash($givenPassword, PASSWORD_BCRYPT);

$passwordControle = readline("Wachtwoord ter controle: ");

if (password_verify($passwordControle, $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

?>