<?php
//Hashing
$password = "1234";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
echo PHP_EOL;
echo strlen($hash);
echo PHP_EOL;

//MD5
echo md5("1234");
echo PHP_EOL;

//print_r(hash_algos());
echo hash("md5","1234");
echo PHP_EOL;

//SHA1
echo sha1("1234");
echo PHP_EOL;

//print_r(hash_algos());
echo hash("sha1","1234");
echo PHP_EOL;
?>