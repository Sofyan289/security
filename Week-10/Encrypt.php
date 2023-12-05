<?php


$bericht = $argv[1];
$methode = 'aes-128-gcm';
$ivlen = openssl_cipher_iv_length($methode);
$iv = openssl_random_pseudo_bytes($ivlen);
$key = $argv[2];

$geheim_schrift = openssl_encrypt($bericht, $methode, $key, $options = 0, $iv, $tag);

echo $geheim_schrift;

$origineel_bericht = openssl_decrypt($geheim_schrift, $methode, $key, $options = 0, $iv, $tag);
echo ' ' . $origineel_bericht;
