<?php
$string = "Hello World";

//Separate String with explode
$parts = explode(" ", $string);
print_r($parts);

//Combine String with join/implode
$original = join(" ", $parts);
print_r($original);
echo PHP_EOL;

// Separate every character from a string
$parts2 = str_split($string);
print_r($parts2);