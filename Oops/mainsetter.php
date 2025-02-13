<?php
class Test{
    public $name;
    public function demo($name){
        echo $this->name=$name;//property
        echo "Hello Demo";
    }
}
$test = new Test;
$test->demo("Sandhya");//property setter
$test->name;
?>