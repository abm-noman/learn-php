<?php
    $json = '{"country" : "বাংলাদেশ"}';
    $unicodeData = json_decode($json, true);

    print_r($unicodeData);

?>