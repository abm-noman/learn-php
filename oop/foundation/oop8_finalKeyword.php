<?php

abstract class OurClass{
    final function doSomething(){
        // Cannot override final method OurClass::doSomething()
        echo "Doing Something";
    }
}

class MyClass extends OurClass{
    // function doSomething() //Cannot override final method OurClass::doSomething()
    // {
    //     echo "Doing nothing";
    // }
}

$mc = new MyClass();
$mc -> doSomething();
