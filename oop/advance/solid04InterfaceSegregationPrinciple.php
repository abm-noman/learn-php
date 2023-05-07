<?php
//     Interface Segregation Principle (ISP): Clients should not be forced to depend on interfaces they do not use. This means that you should define interfaces that are specific to each client's needs, rather than having a single interface that contains all possible methods.
//     This means that the client should not have to know the details of the server's interface.


//bad practice
interface Vehicle{
    // function hasTwoTires();
    // function hasFourTires();
    // function hasSixTires();
    // function hasEightTires();
    // function isDieselCompatible();
    // function isElectricCompatible();
    // function isGasCompatible();
    // function getMileage();
    // function getFuelConsumption();
}


//ISP
interface twoWheelers{
    function hasTwoTires();
}

interface fourWheelers{
    function hasFourTires();
}

class Motorcycle implements Vehicle, twoWheelers{
    function hasTwoTires(){
        return true;
    }
}

class Truck implements Vehicle{
    function hasSixTires(){
        return true;
    }
}

?>