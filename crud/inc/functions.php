<?php

define('DB_NAME', 'D:/Workspace/PHP/crud/data/db.txt');

function seed($filename){
    $data = array(
        array(
            'fname'=>'Abm',
            'lname'=>'Noman',
            'age'=>12,
            'roll'=>1
        ),
        array(
            'fname'=>'Abdullah',
            'lname'=>'Moin',
            'age'=>11,
            'roll'=>2
        ),
        array(
            'fname'=>'Minhazul',
            'lname'=>'Moon',
            'age'=>12,
            'roll'=>3
        ),
        array(
            'fname'=>'Sabbir',
            'lname'=>'Hossain',
            'age'=>12,
            'roll'=>1
        )
    );

    $serializedData = serialize($data);
    file_put_contents($filename,$serializedData, LOCK_EX);
}