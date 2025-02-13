<?php
class ClassName{
    public $name = "Vishal";//Property or method
    function demo(){
        $name1 ="sandhya";   
        echo $name1;
    }
}
// new ClassName; //or
$obj = new ClassName();//object
var_dump($obj);
echo "<br>";
echo $obj->name;
echo "<br>";
$obj->demo();
?>