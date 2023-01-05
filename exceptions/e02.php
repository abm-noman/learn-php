<?php
class MyException extends Exception{}
class NetworkException extends Exception{}

function testException(){
    throw new MyException();
}

try{
    testException();
}
catch(MyException $e){
echo "MyExceptions Caught";
}
catch(NetworkException $e){
echo "NetworkExceptions Caught";
}

?>