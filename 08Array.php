<?php

$n = "12";
$students = array(
    "Noman",
    "Moin",
    "Moon",
    "Sabbir"
);

$n = count($students);
for ($i = 0; $i < $n; $i++) { 
    echo $students[$i] . "\n";
}
echo PHP_EOL;

for ($i = $n-1; $i >= 0; $i--) { 
    echo $students[$i] . "\n";
}


?>