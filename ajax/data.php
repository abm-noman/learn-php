<?php

$data = $_POST;
$data['result'] = 'success';
echo json_encode( $data, JSON_PRETTY_PRINT );


?>