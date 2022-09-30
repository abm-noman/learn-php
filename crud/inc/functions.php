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
            'id' => 2,
            'fname'=>'Abdullah',
            'lname'=>'Moin',
            'age'=>11,
            'roll'=>2838
        ),
        array(
            'id' => 3,
            'fname'=>'Minhazul',
            'lname'=>'Moon',
            'age'=>12,
            'roll'=>2877
        ),
        array(
            'id' => 4,
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
                <td><?php printf('<a href="/crud/index.php?task=edit&id=%s">Edit</a>  |  <a href="/crud/index.php?task=edit&id=%s">Delete</a>',$student['id'], $student['id']);?></td>
            </tr>
            <?php
        }
            ?>


        </table>
        <?php
}

function addStudent($fname, $lname, $age, $roll){
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach($students as $_student){
        if($_student['roll'] ==$roll){
            $found = true;
            break;
        }
    }
    if(!$found){
        $newId = count($students)+1;
        $student = array(
            'id' => $newId,
            'fname'=> $fname,
            'lname'=> $lname,
            'age'=> $age,
            'roll'=> $roll,
        );
        array_push($students, $student);
        $serializedData = serialize($students);
        file_put_contents(DB_NAME ,$serializedData, LOCK_EX);  
        return true;      
    }
    return false;

}
