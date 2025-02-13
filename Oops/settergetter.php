<?php
class Test{
    public $name;
    public function demo(){
        echo $this->name;//property
        echo "Hello Demo";
    }
}
$test = new Test;
$test->name="Sandhya";//property setter
$test->demo();
?>