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

//Separate String using multiple delimeter
$string2 = "Hello World, How are you?";
$parts3 = strtok($string2, " ,");
while ($parts3 !== false) {
    echo $parts3."\n";
    $parts3 = strtok(" ?,");
}

echo PHP_EOL;
$string3 = "A quick Brown fox jumps over the lazy dog";
$parts4 = preg_split("/ |,/", $string3);
print_r($parts4);