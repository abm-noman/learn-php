<?php

$food = [
    'vegetable' => "potato, tomato, carrot, capsicum",
    'fruit' => "mango, apple, orange",
    'drinks' => "milk, water",
];

echo $food['vegetable'];
echo PHP_EOL;
echo $food['fruit'];
echo PHP_EOL;


foreach($food as $key => $value){
    echo($key." = ".$value."\n");
}

echo PHP_EOL;


//Separate element - Array to String
echo "Separate element\n";
$vegetable = explode(", ","potato, tomato, carrot, capsicum"); //delimeter
var_dump($vegetable);
echo $vegetable[2];
echo PHP_EOL;


//Multiple Delimeter
echo "Separate element\n";
$vegetable = preg_split("/(, |,)/","potato, tomato, carrot,capsicum"); //Multiple delimeter
print_r($vegetable);
echo PHP_EOL;


//Separate element - String to Array
$vegetableString = join(", ",$vegetable);
echo $vegetableString;
?>