<?php
$name = "Earth";
$radius = 6400;
echo $name;
echo PHP_EOL;
echo $radius;
echo PHP_EOL; // End of Line, New Line

var_dump($name); // printing variable type and string length with value except using echo.
var_dump($radius);

$uname = strtoupper($name);
printf("We are living on %s", $uname); //String to upper case.