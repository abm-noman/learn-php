<?php
class MathCalculator
{
    private $number;
    static $name;
    static function fibonacci($n)
    {
        // if and else if to generate first two numbers
        if ($n == 0)
            return 0;
        else if ($n == 1)
            return 1;

        // Recursive Call to get the upcoming numbers
        else
            return (($n - 1) + ($n - 2));
    }

    function factorial($n)
    {
        echo "\nFactorial of {$n} = ";
        $result = 1;
        for ($i=1; $i <= $n ; $i++) { 
            $result *= $i;
        }
        echo $result;
    }
}


$mathc = new MathCalculator();
MathCalculator::fibonacci(10);
echo "Fibonacci series upto 10 = ";
// Driver Code
for ($counter = 0; $counter < 10; $counter++) {
    echo MathCalculator::fibonacci($counter), ' ';
}

$mathc->factorial(6);
