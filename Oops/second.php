<?php
class Car{
    function engine(){
        echo "ENhine start";
    }
    function gear(){
        echo "5 gear";
    }
}
$nano = new Car;
$bmw = new Car;
$nano->engine();
$nano->gear();
echo "<br>";

$bmw->engine();
$bmw->gear();

?>