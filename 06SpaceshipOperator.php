<?php

//Spaceship operator <=>
/*The spaceship operator is used for comparing two expressions. 
It returns -1, 0 or 1 when $x is respectively less than, equal to, or greater than $y . 
Comparisons are performed according to PHP's usual type comparison rules.
*/

$x = 9;
$y = 5;

function greaterOrSmaller($x, $y){
    if($x>$y){
        return 1;
    }
    else if($x==$y){
        return 0;
    }
    else{
        return -1;
    }
}

if (greaterOrSmaller($x, $y)==1){
    echo "{$x} is greater than {$y}";
}
else if (greaterOrSmaller($x, $y)==0){
    echo "{$x} is equal to {$y}";
}
else if (greaterOrSmaller($x, $y)==-1){
    echo "{$x} is smaller than {$y}";
}



//Spaceship operator <=>

echo "\n";

$result = $x <=> $y;
if ($result==1){
    echo "{$x} is greater than {$y}";
}
else if ($result==0){
    echo "{$x} is equal to {$y}";
}
else if ($result==-1){
    echo "{$x} is smaller than {$y}";
}

?>