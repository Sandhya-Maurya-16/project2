<?php
class Base{
public function firstMethod($a){
    echo "This is base class method<br>";
}
}
class child extends Base{
    public function firstMethod($a,$b){
        echo "This is child class method<br>";
    }
    }
    $child = new Child;
    $child->firstMethod(10,10);
?>