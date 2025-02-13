<?php
class Test{
    protected $name="Dipanshu";
    protected function demo(){
        echo "Hello this is protected";
    }
    public function all(){
        echo $this->name;
        echo $this->demo();
    }
}
$test = new Test;
echo $test->all();
class Child extends Test{
    function hello(){
        echo "Hii";
        echo $this->demo();
    }
}
$child = new Child;
$child->demo();
?>