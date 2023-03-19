<?php
/*
In PHP, a trait is a mechanism for code reuse and composition that allows a developer to reuse code in multiple classes without using
inheritance. A trait is similar to a class, but it cannot be instantiated on its own. Instead, it is intended to be included within a class 
using the use keyword.

Traits provide a way to package functionality and share it among multiple classes, which can be particularly useful when a developer wants to 
reuse code across multiple unrelated classes, or when multiple inheritance is not an option.

Here's an example of a trait in PHP: 
*/

// Defining a trait
trait ExampleTrait {
    public function hello() {
        echo "Hello, World!";
    }
}

// Using the trait in a class
class ExampleClass {
    use ExampleTrait;

    public function test() {
        $this->hello(); // Using the hello() method from the ExampleTrait
    }
}

// Creating an object of the class and calling the test() method
$obj = new ExampleClass();
$obj->test(); // Output: "Hello, world!"


/*
In the example above, we define a trait called ExampleTrait that has a single method called hello(). We then use the ExampleTrait in a class called ExampleClass by using the use keyword followed by the name of the trait. Finally, we create an object of the ExampleClass and call its test() method, which calls the hello() method from the ExampleTrait.

Traits are useful for code reuse because they allow developers to share code between multiple classes without requiring those classes to have a common parent class. This makes it easier to maintain and extend code over time.
*/


?>