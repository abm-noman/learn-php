<?php
$string = ("Hello World");

// Access String Character using Index number

echo $string[0];

// Access String Character using Negative Index number from the last
echo $string[-5]; //W is 5th word from the last
echo PHP_EOL;

// Access String Character in a range
echo substr($string,1,4);
echo PHP_EOL;
echo substr($string,4);
echo PHP_EOL;
echo substr($string,-4);