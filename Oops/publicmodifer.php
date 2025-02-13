<?php
class Test{
    public $name="Vishal";
    Public $age= 23;
    public function demo(){
        echo $this->name."<br>";
return "Public Method And Property<br>";
    }
}
$test = new Test;
echo $test->name, $test->age;
echo $test->demo();
class Child extends Test{
    public function test(){
        echo $this->name."<br>";
    }
}
$test1 = new Child;
echo $test1->name, $test1->age;
echo $test1->demo();
?>