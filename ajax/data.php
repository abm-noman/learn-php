<?php

$data = $_GET;
$data['result'] = 'success';
echo json_encode($data, JSON_PRETTY_PRINT);


?>