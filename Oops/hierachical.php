<?php
class Base{
    function demo(){
        echo "This is Base Class<br>";
    }
}
// $base = new Base;
// $base->demo();
class Child extends Base{
    function test(){
        echo "This is first Class<br>";
    }
}
// $papa = new Child;
// $papa->demo();
// $papa->test();
class Second extends Base{
    function hello(){
        echo "This is Second Class<br>";
    }
}
$beta = new Second;
$beta->demo();
$beta->hello();
?>