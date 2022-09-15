<?php
$string = "A quick Brown fox jumps over the lazy dog";
echo $string[14];

echo PHP_EOL;
echo strpos($string, "fox"); //Case sensitive strpos
echo PHP_EOL;
echo stripos($string, "Fox"); //Case insensitive stripos
echo PHP_EOL;

//String replace

$replaceString = str_replace('fox', 'wolf', $string);
echo $replaceString;
echo PHP_EOL;
echo $string;
