<?php
class Student{
    private $name;
    private $id;
    private $class;
    function __construct($name='',$id='',$class='')
    {
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
    }

    // Get & set method
    // function getName(){
    //     return $this->name;
    // }
    
    // function setName($name){
    //     $this->name = $name;
    // }

    // function getId(){
    //     return $this->id;
    // }
    
    // function setId($id){
    //     $this->id = $id;
    // }

    // function getClass(){
    //     return $this->class;
    // }
    
    // function setClass($class){
    //     $this->class = $class;
    // }


    // Magic Method
    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $value)
    {
        $this->$prop = $value;
    }

}

$R = new Student('Noman', 39, 11);

echo $R->name;
echo $R->id;
echo $R->class;

