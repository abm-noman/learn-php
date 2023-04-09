<?php

use Student as GlobalStudent;

trait Human{     
    public function get(){
        echo "Welcome to Human trait. \n";
    }
}

trait Robot{     
    public function showRobot(){
        echo "Welcome to Robot trait. \n";
    }
}

class Student{
    use Human;
    use Robot;
}

$std = new Student;
$std->get();
$std->showRobot();

?>