<?php
function familyName($fname, $year) {
  echo "$fname Born in $year\n";
}

familyName("Jack", "1995");
familyName("Stale", "1997");
familyName("Jim", "1999");


//Sum of two numbers
function addNumbers(int $a, int $b) {
    $sum = $a + $b;
    echo ("{$a} + {$b} = {$sum}\n");
  }
  echo addNumbers(5, 9);


  //Recursion
  function display($number) {    
    if($number<=5){    
     echo "$number \n";    
     display($number+1);    
    }  
}    
    
display(1); 