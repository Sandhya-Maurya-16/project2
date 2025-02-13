<?php
interface Test{
    public function demo();
    public function hello();
}
interface Second{
    public function second();
}
class Demo implements Test,Second{
    public function hii(){
        echo "<b><i><h1>This is hii</h1></i></b><br>";
    }
    public function demo(){
        echo "<b><i><h1>This is demo interface</h1></i></b><br>";
    }
    public function hello(){
        echo "<b><i><h1>This is hello interface</h1></i></b><br>";
    }
    public function second(){
        echo "<b><i><h1>This is second interface</h1></i></b><br>";
    }
}
$demo = new Demo;
$demo->hii();
$demo->demo();
$demo->hello();
$demo->second();
?>