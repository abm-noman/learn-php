<?php
// Correct Ways of writing variables
$_variable;
$variable;
$variable_3;
$Var4;
$varFive; //camel case


$name = "Bangladesh"; //string
$age = 51; //int

echo "The name of my country is {$name}\n";

var_dump($name); // Calculate Variable Type, Length and value
var_dump($age);

define('PI',3.1416); //Constant Variable, Unchangeable 
echo "Value of pi = ".PI;
echo "\n";
echo constant('PI');