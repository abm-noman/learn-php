<?php
    class Person{
        public $firstname;
        public $lastname;
        public $email;
        public $phone;
        private $private;
        protected $protected;
        static $static;
        //public function __construct($firstname, $lastname, $email, $phone, $private, $protected){
            
        //     $this->firstname = $firstname;
        //     $this->lastname = $lastname;
        //     $this->email = $email;
        //     $this->phone = $phone;
        //     $this->private = $private;
        //     $this->protected = $protected;
        //     }
        }

    $p = new Person();
    $p->firstname = "ABM";
    $p->lastname = "Noman";
    $p->email = "noman@abm.com";
    $p->phone = "01700000000";

    echo json_encode($p, JSON_PRETTY_PRINT);
?>