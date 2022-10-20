<?php
    function factorial($n){
        $result = 1;
        for ($i=1; $i <= $n ; $i++) { 
            $result *= $i;
        }
        return $result;
    }

    $startTime = microtime(true);
    factorial(100);
    $endTime = microtime(true);
    $executionTime = $endTime - $startTime;

    echo $executionTime;