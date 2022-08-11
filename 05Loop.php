<?php
//for loop
for($i = 0; $i <= 10; $i++){
    echo $i;
    echo PHP_EOL;
}
echo "\n";

//print even numbers
for($i = 2; $i <= 20; $i+=2){
    echo $i;
    echo PHP_EOL;
}
echo "\n";

//Factorial of any number
$num = 6;
for($i=$num, $factorial=1; $i>1; $i--){
    $factorial = $factorial * $i;
}
   printf("Factorial of %d = %d",$num, $factorial);

echo "\n";

//While loop
$i = 0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
}

echo "\n";

//Do While loop
$i = 0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);


//Fibonacci Series
echo "\n";
echo("Fibonacci Series");
echo "\n";
$very_old = 0;
$old = 1;
$new = 1;

for($i=0; $i<20; $i++){
    echo $very_old." ";
    $old = $new;
    $new = $old + $very_old;
    $very_old = $old;

}