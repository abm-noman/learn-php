<?php
//SQlite
//SQLite is a relational database management system contained in a C library. In contrast to many other database management systems, SQLite is not a client–server database engine. Rather, it is embedded into the end program.

//creating db.sqlite andt user table

$pdo = new PDO("sqlite:db.sqlite");
$stmt = $pdo->query("SELECT * FROM users");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

$users = [
    ['name'=>'Moin','email'=>'moin@abm.com'],
    ['name'=>'Moon','email'=>'moon@abm.com'],
    ['name'=>'Sabbir','email'=>'sabbir@abm.com'],
];

foreach($users as $user){
    $pdo->query("INSERT INTO users(name, email) VALUES('{$user['name']}','{$users['email']}')");
}

//selecting all users
$stmt = $pdo->query("SELECT * FROM users");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

?>