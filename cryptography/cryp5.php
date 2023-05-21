<?php
//Encryption
print_r(openssl_get_cipher_methods());
echo PHP_EOL;
$cipher = 'aes-256-cbc';
$key = 'my_secret_key';
$iv = 'my_iv';
$data = 'my_data';
$encrypted = openssl_encrypt($data, $cipher, $key, 0, $iv);
echo $encrypted;
echo PHP_EOL;
$decrypted = openssl_decrypt($encrypted, $cipher, $key, 0, $iv);
echo $decrypted;
echo PHP_EOL;

?>