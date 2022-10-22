<?php
    //unix epoch to a particular date & time
    echo mktime(0,0,0,1,1,2022)."\n"; //hour, minute, second, month, date, year
    
    date_default_timezone_set('Asia/Dhaka');
    echo mktime(0,0,0,1,1,2022)."\n"; //hour, minute, second, month, date, year
    echo gmmktime(0,0,0,1,1,2022)."\n"; //GMT time

    //date difference
    echo (mktime(0,0,0,1,1,2022) - mktime(0,0,0,9,13,1997))/(24*60*60)."\n";

    //Convert String to time
    echo strtotime("22 October, 2022")."\n";
    echo strtotime("now")."\n"; //Current time
    echo strtotime("+3days")."\n"; //3 days later
    echo strtotime("+2 weeks 3 days 24 hours")."\n"; 


    //Date difference
    $d1 = new DateTime('18 November 2015');
    $d2 = new DateTime('22 October 2022');
    $difference = date_diff($d1,$d2);
    echo $difference->format('%y Years %m Month %d Days');
?>