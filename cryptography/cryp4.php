<?php
//Crypt
$password = "1234";
$hash = crypt($password, "salt");
echo $hash;
echo PHP_EOL;

$message ="This is a secret message";
$blowfish_salt = "$2$10$". bin2hex(random_bytes(11));
echo $blowfish_salt;
echo PHP_EOL;


echo crypt($message, $blowfish_salt);

?>