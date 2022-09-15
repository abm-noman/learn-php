<?php
$string = " Hello \n";
$string = trim($string); //trims all unprintable strings
echo $string;
echo "World";
echo PHP_EOL;
//Word Warp
$string2 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ipsa odio aut perspiciatis possimus, quisquam nemo recusandae explicabo aperiam blanditiis laborum corrupti tempore obcaecati, optio quod vero libero ullam, magnam veritatis. Amet reprehenderit tempore, hic laudantium ab earum voluptatibus minus, aperiam officiis debitis qui quibusdam, sit enim laboriosam assumenda ipsa.";
echo wordwrap($string2,50);
