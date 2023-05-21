<?php
    //HMAC
    $data = "Hello World";
    $key = "secret";
    $hash = hash_hmac('sha256', $data, $key, true);
    echo $hash;
    echo PHP_EOL;
    echo strlen($hash);
    echo PHP_EOL;
    echo base64_encode($hash);
    echo PHP_EOL;
    echo strlen(base64_encode($hash));
    echo PHP_EOL;
    echo base64_encode($hash);
    echo PHP_EOL;
    echo base64_decode(base64_encode($hash));
    echo PHP_EOL;

    $hash = hash_hmac('sha256', $data, $key, false);
    echo $hash;
    echo PHP_EOL;


    print_r(hash_hmac_algos());

?>