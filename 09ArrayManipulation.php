<?php
$students = [
    "Noman",
    "Moin",
    "Moon",
    "Sabbir",
    123,
];


//Replace Element
 echo("Replace Element \n");
$students[4]= "Imran";

$n = count($students);
for ($i = 0; $i < $n; $i++) { 
    echo $students[$i] . "\n";
}
echo PHP_EOL;



//Remove element from the bottom
echo("Remove element from the bottom using array_pop \n");
$stud = array_pop($students);

$n = count($students);
for ($i = 0; $i < $n; $i++) { 
    echo $students[$i] . "\n";
}
echo PHP_EOL;



//Remove element from the top
echo("Remove element from the top using array_shift \n");
$stud = array_shift($students);

$n = count($students);
for ($i = 0; $i < $n; $i++) { 
    echo $students[$i] . "\n";
}
echo PHP_EOL;



//Add new element at the bottom
echo("Add new element at the bottom using array_push \n");
$stud = array_push($students, "Adnan");

$n = count($students);
for ($i = 0; $i < $n; $i++) { 
    echo $students[$i] . "\n";
}
echo PHP_EOL;


//Add new element at the top
echo("Add new element at the top using array_unshift \n");
$stud = array_unshift($students, "Abdullah");

$n = count($students);
for ($i = 0; $i < $n; $i++) { 
    echo $students[$i] . "\n";
}
echo PHP_EOL;



// array_shift();
// array_unshift();
// array_push();
// array_pop();
?>