<?php
// Liskov Substitution Principle (LSP): Subtypes must be substitutable for their base types. This means that any instance of a subtype should be able to be used in place of an instance of its base type without causing errors or unexpected behavior.

abstract class Bird{
    
    abstract function eat();
    abstract function sleep();
}

abstract class FlyingBird extends Bird{
    abstract function fly();
}

abstract class WalkingBird extends Bird{
    abstract function walk();
}

class BirdManager{
    public function maintainBirds(Bird $b){
        $b->eat();
        $b->sleep();
    }

    function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }

    function moveWalkingBird(WalkingBird $wb){
        $wb->walk();
    }


}

class Eagle extends FlyingBird{
    function fly(){
        echo "Eagle is flying";
    }
    function eat(){
        echo "Eagle is eating";
    }
    function sleep(){
        echo "Eagle is sleeping";
    }
}

class Hawk extends FlyingBird{
    function fly(){
        echo "Hawk is flying";
    }
    function eat(){
        echo "Hawk is eating";
    }
    function sleep(){
        echo "Hawk is sleeping";
    }
}

class Penguin extends WalkingBird{
    // function fly(){
    //     echo "Penguin is flying"; //Penguins can't fly
    // }
    function walk(){
        echo "Penguin is walking";
    }
    function eat(){
        echo "Penguin is eating";
    }
    function sleep(){
        echo "Penguin is sleeping";
    }


}


?>