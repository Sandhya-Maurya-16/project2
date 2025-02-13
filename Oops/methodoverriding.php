<?php
class Base{
public function firstMethod(){
    echo "This is base class method<br>";
}
}
$base = new Base;
$base->firstMethod();
class child extends Base{
    public function firstMethod(){
        parent::firstMethod();//we can use parent keyword or BaseClassName
        Base::firstMethod();//we can use parent keyword or BaseClassName
        echo "This is child class method<br>";
    }
    }
    $child = new Child;
    $child->firstMethod();
?>