<?php
//     Single Responsibility Principle (SRP): A class should have only one reason to change, i.e., it should have only one responsibility. This means that a class should have only one job or function to perform, and all of its methods and properties should be related to that job.


//bad practice
class Student{
    function attendance(){

    }
    function grade(){

    }
    function payment(){

    }
}

//Single Responsibility Principle
class attendance(){

}
class grade(){

}
class payment(){
    
}

?>