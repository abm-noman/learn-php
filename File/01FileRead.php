<?php

$filename = "D:\Workspace\PHP\File\data\File1.txt";

$fp = fopen($filename, 'r');
while($line = fgets($fp)){
    echo $line;
}

fclose($fp);


$data = file($filename);
print_r($data);
echo PHP_EOL;

$data2 = file_get_contents($filename);
print_r($data2);