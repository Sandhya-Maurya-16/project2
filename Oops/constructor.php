<?php
class Demo{
    function demo(){
        echo "Hello demo";
    }
    function __construct($name,$num)
    {
        echo "$name Constructor $num";
    }
}
$demo = new Demo("hello",12);
?>