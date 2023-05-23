<?php
    $data = array(
        "firstname" => "ABM",
        "lastname" => "Noman",
        "email" => "noman@abm.com",
        "phone" => "01700000000",
        "address" => "Mymensingh",
        "zip" => "2270",
        "country" => "Bangladesh"
    );
    echo json_encode($data, JSON_PRETTY_PRINT);
?>