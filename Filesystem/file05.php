<?php
    //glob function

    print_r(glob('./*'));

    //Only Directory names
    print_r(glob('./*', GLOB_ONLYDIR));

    //NO Sort
    print_r(glob('./*', GLOB_NOSORT));

    //Only Directory names starts with particular alphabet
    print_r(glob('./F*', GLOB_ONLYDIR));

    //Directory name having particular alphabet
    print_r(glob('./*l*', GLOB_ONLYDIR));

    
    //Only Directory names starts with various alphabet
    print_r(glob('./{o,c}*', GLOB_ONLYDIR|GLOB_BRACE));


?>