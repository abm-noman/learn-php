<?php
class Animal{
    protected $name; //same as private, but can be accessed from extended class(sub class)
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet(){

    }
    
    public function eat(){
        echo "{$this->name} is earing\n";
    }

    public function walk(){
        echo "{$this->name} is walking\n";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }
}

class Cat extends Animal{
    public function greet(){
        echo "{$this->name} says Meow\n";
    }
}

class Dog extends Animal{
    public function greet(){
        echo "{$this->name} says Woof\n";
    }
}

$cat1 = new Cat('Mini');
$cat1->greet();

$dog1 = new Dog('Zero');
$dog1->greet();
