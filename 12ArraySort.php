<?php

$fruits = array('a'=>'apple', 'b'=>'banana', 'd'=>'dates', 'c'=>'carrot');
$numbers = array(11, 2, 4, 3, 23, 76, 22, 8, 9, 50, 46);

//sorting with key - asort
echo("sorting with key\n");
asort($fruits);
print_r($fruits);

//sorting without key - sort
echo("sorting without key\n");
sort($fruits);
print_r($fruits);

//sorting numbers
echo("sorting numbers\n");
sort($numbers);
print_r($numbers);

//sorting numbers in reverse order - rsort
echo("sorting numbers in reverse order\n");
rsort($numbers);
print_r($numbers);

//sorting numbers
echo("sorting numbers\n");
ksort($numbers);
print_r($numbers);






?>