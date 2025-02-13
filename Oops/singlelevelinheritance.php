<?php
class Base{
    function demo(){
        echo "This is  the Base class<br/>";
    }
    function hello(){
        echo "This is  the hello method<br/>";
    }
}
//new Base
class Derived extends Base{
    function __construct()
    {
        echo "This is  the Derived class<br/>";  
    }
}
$derived = new Derived;
$derived->demo();
$derived->hello();
?>