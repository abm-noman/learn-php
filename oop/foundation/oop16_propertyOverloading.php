<?php
class MotorCycle
{
    private $parameters;
    function __construct($displacement, $capacity, $mileage)
    {
        $this->parameters = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }
    // function getDisplacement(){
    //     return $this->parameters['displacement'];
    // }
    // function setDisplacement($displacement){
    //     return $this->parameters['displacement'] = $displacement;
    // }

    function __isset($name)
    {
        if (!isset($this->parameters['name'])) {
            echo "{$name} not Found.\n";
            return false;
        }
        return true;
    }

    function __unset($name){
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }

    function __get($name)
    {
        echo $this->parameters['name'];
    }
    function __set($name, $value)
    {
        echo $this->parameters['name'] = $value;
    }
}

$pulsar = new MotorCycle('150cc', '16liter', '40kmh');

if(isset($pulsar->tireSize)){
    echo $pulsar->tireSize;
}else{
    // echo "Not Found";
}

unset($pulsar->mileage);