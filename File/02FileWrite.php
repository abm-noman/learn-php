<?php

$filename = "D:\Workspace\PHP\File\data\File2.txt";

$fp = fopen($filename,'w'); //it will remove all existing data and start writing from line 1

fwrite($fp, "Bangladesh\n");
fwrite($fp, "Saudi Arabia\n");
fwrite($fp, "Iran\n");

//To keep previous data
$existingData = file_get_contents($filename);
$fp = fopen($filename,'w'); 
fwrite($fp, $existingData);
fwrite($fp, "USA\n");
fwrite($fp, "Russia\n");
fwrite($fp, "Australia\n");
fwrite($fp, "Japan\n");

//Append mode
$fp = fopen($filename,'a'); //it will keep all existing data and start writing from last line

fwrite($fp, "Bangladesh\n");
fwrite($fp, "Qatar\n");
fwrite($fp, "China\n");
fclose($fp);