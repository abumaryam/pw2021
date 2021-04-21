<?php
// DEFINE our cipher
define('AES_256_CBC', 'aes-256-cbc');

$encryption_key = openssl_random_pseudo_bytes(32);
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));
$data = "Encrypt me, please!";
echo "Before encryption: $data\n";
$encrypted = openssl_encrypt($data, AES_256_CBC, $encryption_key, 0, $iv);
echo "Encrypted: $encrypted\n";

// If we lose the $iv variable, we can't decrypt this, so:
// - $encrypted is already base64-encoded from openssl_encrypt
// - Append a separator that we know won't exist in base64, ":"
// - And then append a base64-encoded $iv
$encrypted = $encrypted . ':' . base64_encode($iv);

// To decrypt, separate the encrypted data from the initialization vector ($iv).
$parts = explode(':', $encrypted);

$decrypted = openssl_decrypt($parts[0], AES_256_CBC, $encryption_key, 0, base64_decode($parts[1]));
echo "Decrypted: $decrypted\n";
