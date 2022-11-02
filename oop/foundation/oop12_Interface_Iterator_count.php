<?php

class DistrictCollection implements IteratorAggregate, Countable{
    private $districts;
    function __construct()
    {
        $this->districts = array();   
    }

    function add($district){
        array_push($this->districts,$district);
    }

    // function getDistrict(){
    //     return $this->districts;
    // }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this->districts);
    }
}


$districts = new DistrictCollection;
$districts->add("Mymensingh");
$districts->add("Dhaka");
$districts->add("Chittagong");
$districts->add("Sylhet");
$districts->add("Rangpur");
$districts->add("Rajshahi");



echo count($districts);
