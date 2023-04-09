<?php
//Check current directory
echo getcwd();

//Scandir
$entries = scandir(getcwd());
print_r($entries);

//Check file or folder
foreach($entries as $entry){
    if("."!=$entry && ".."!= $entry){
        if(is_dir($entry)){
            echo "[directory] {$entry} \n";
        }else{
            echo "[file] {$entry} \n";
        }
    }
}

function countDir($dir){
    $count = 0;
    $entries = scandir($dir);

    //Check file or folder
    foreach($entries as $entry){
        if("." != $entry && ".." != $entry){
            if(is_dir($entry)){
                $count++;
            }
         }
    }
    return $count;
}

echo "total directory = "; 
echo countDir(getcwd());



?>