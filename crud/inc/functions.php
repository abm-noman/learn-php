<?php

define('DB_NAME', 'D:/Workspace/PHP/crud/data/db.txt');

function seed(){
    $data = array(
        array(
            'id' => 1,
            'fname'=>'Abm',
            'lname'=>'Noman',
            'age'=>12,
            'roll'=>2839
        ),
        array(
            'id' => 1,
            'fname'=>'Abdullah',
            'lname'=>'Moin',
            'age'=>11,
            'roll'=>2838
        ),
        array(
            'id' => 1,
            'fname'=>'Minhazul',
            'lname'=>'Moon',
            'age'=>12,
            'roll'=>2877
        ),
        array(
            'id' => 1,
            'fname'=>'Sabbir',
            'lname'=>'Hossain',
            'age'=>12,
            'roll'=>2840
        )
    );

    $serializedData = serialize($data);
    file_put_contents(DB_NAME ,$serializedData, LOCK_EX);
}

function generateReport(){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData); ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($students as $student){
            ?>
            <tr>
                <td><?php printf('%s %s',$student['fname'],$student['lname']);?></td>
                <td><?php printf('%s',$student['roll']);?></td>
                <td><?php printf('%s',$student['age']);?></td>
                <td><?php printf('<a href="#">Edit</a>  |  <a href="#">Delete</a>');?></td>
            </tr>
            <?php
        }
            ?>


        </table>
        <?php
}
