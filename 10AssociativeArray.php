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

?>