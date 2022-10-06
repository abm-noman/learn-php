<?php
session_name("myApp");
session_start([
    'cookie_lifetime'=>60
]);

$_SESSION['name']='Noman';
echo $_SESSION['name'];
