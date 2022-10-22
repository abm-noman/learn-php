<?php
    class Human{
        public $name;
        function sayHi(){
            echo "Assalamualaikum\n";
            $this->sayName();
        }
        private function sayName(){
            echo "My Name is {$this->name}\n";
        }
    }
    class Cat{
        function sayHi(){
            echo "Meow\n";
        }
    }
    class Dog{
        function sayHi(){
            echo "Woof\n";
        }
    }

    // Object
    $h1 = new Human(); 
    $h1 -> name = "Rubel\n"; // get
    $c1 = new Cat();
    $d1 = new Dog();

    $h1 -> sayHi();
    echo $h1->name; //get
    $c1 -> sayHi();
    $d1 -> sayHi();


?>