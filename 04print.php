<?php
$name = "Earth";
echo $name;
echo PHP_EOL; // End of Line, New Line

var_dump($name); // printing variable type and string length with value except using echo.
$uname = strtoupper($name);
printf("We are living on %s", $uname);