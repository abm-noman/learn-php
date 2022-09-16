<?php

$filename = "D:\Workspace\PHP\File\data\File4.txt";

$students = array(
    array(
        'fname'=>'Abm',
        'lname'=>'Noman',
        'age'=>12,
        'class'=>7,
        'roll'=>1
    ),

    array(
        'fname'=>'Abdullah',
        'lname'=>'Moin',
        'age'=>11,
        'class'=>7,
        'roll'=>2
    ),

    array(
        'fname'=>'Sabbir',
        'lname'=>'Hossain',
        'age'=>13,
        'class'=>7,
        'roll'=>3
    ),

    array(
        'fname'=>'Minhazul',
        'lname'=>'Alam',
        'age'=>12,
        'class'=>7,
        'roll'=>4
    ),
    );

    $fp = fopen($filename,"w");
    foreach ($students as $student) {
        $data = sprintf("%s %s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
        fwrite($fp, $data);
    }
    fclose($fp);