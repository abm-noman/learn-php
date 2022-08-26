<?php
//Copy by Value - Deep Copy
echo ("Copy by Value - Deep Copy ");

$person = array('fname'=>'Abdullah','lname'=>'Noman');
$newPerson = $person; //Copy by Value - Deep Copy
$newPerson['lname']='Moin';

print_r($person);
print_r($newPerson);



//Copy by Reference - Shallow Copy
echo ("Copy by Reference - Shallow Copy ");
$person = array('fname'=>'Abdullah','lname'=>'Noman');
$newPerson = &$person; //Copy by Reference - Shallow Copy
$newPerson['lname']='Moin';

print_r($person);
print_r($newPerson);


?>