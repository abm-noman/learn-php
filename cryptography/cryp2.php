<?php
//Timing Attack
// $password = "123456";
// $hash = password_hash($password, PASSWORD_DEFAULT);
// echo $hash;
// echo PHP_EOL;
// echo strlen($hash);
// echo PHP_EOL;


// if (password_verify($password, $hash)) {
//     echo "You are logged in";
// } else {
//     echo "You are not logged in";
// }

$password = "Secret Password";
$hash = hash('sha1',$password);
echo $hash;
echo PHP_EOL;

$userInputHash = hash("sha1", $_POST['password']);

if($hash == $userInputHash){
    echo "You are logged in";
} else {
    echo "You are not logged in";
}
echo PHP_EOL;


if (hash_equals($hash,$userInputHash)) {
    echo "You are logged in";
} else {
    echo "You are not logged in";
}
echo PHP_EOL;


if (password_verify($password, $hash)) {
    echo "You are logged in";
} else {
    echo "You are not logged in";
}


?>