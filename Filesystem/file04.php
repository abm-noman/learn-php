<?php
    const FILENAME = "D:\Workespace\PHP\Filesystem\\file01.php";

    //Basename Filename.extension
    echo pathinfo(FILENAME,PATHINFO_BASENAME);
    echo PHP_EOL;

    //DIRECTORYNAME
    echo pathinfo(FILENAME,PATHINFO_DIRNAME);
    echo PHP_EOL;

    //Only Filename
    echo pathinfo(FILENAME,PATHINFO_FILENAME);
    echo PHP_EOL;

    //File Extension
    echo pathinfo(FILENAME,PATHINFO_EXTENSION);
    echo PHP_EOL;


?>
