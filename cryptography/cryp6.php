<?php
// base64 Encode decode
$data = "Hello World";
$encoded = base64_encode($data);
echo $encoded;
echo PHP_EOL;

echo base64_decode($encoded);
echo PHP_EOL;




?>