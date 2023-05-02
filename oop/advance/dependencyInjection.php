<?php
//Dependency Injection or Inversion of Control

    interface BaseStudent{
        function displayName();
    }

    class Student implements BaseStudent{
        private $name;
        function __construct($name)
        {
            $this->name = $name;
        }
        function displayName()
        {
            echo "Hello from ".$this->name;
        }
    }

    class StudentManager{
        function introduceStudent($name){
            $st = new Student($name);
            $st->displayName();
        }

    }
    
    $sm = new StudentManager();
    $sm->introduceStudent("Noman");


?>