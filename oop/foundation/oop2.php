<?php
    class Human{
        public $name;
        public $age;

        function __construct($personName, $personAge = 0){
            //echo "New Human object \n";
            $this->name = $personName;
            $this->age = $personAge;
         }


        function sayHi(){
            echo "Assalamualaikum\n";
            $this->sayName();
        }
        private function sayName(){
            if($this->age){
                echo "My Name is {$this->name}, I am {$this->age} years old\n";
            }else{
                echo "My Name is {$this->name}, I do not know how old I am.\n";
            }
        }
    }

    $h1 = new Human("Noman",25);
    $h1 -> sayHi();
    $h2 = new Human("Moin");
    $h2 -> sayHi();