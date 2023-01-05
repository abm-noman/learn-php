<?php
class Student{
    function __construct($name, $age)
    {
        $this->name = $name;
        if($age<4){
            throw new Exception("Too Young.\n",1001);
        }
        elseif($age>30){
            throw new Exception("Too Old.\n",1002);
        }
        $this->age = $age;
    }
}

try{
    $s = new Student('Noman', 411);
}
catch(Exception $e){
    echo $e->getCode().":".$e->getMessage();
}

?>