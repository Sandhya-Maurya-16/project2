<?php
class Dada{
    function demo(){
        echo "I am Dada<br>";
    }
}
// $dada = new Dada;
// $dada->demo();
class Papa extends Dada{
    function demo1(){
        echo "I am papa<br>";
    }
}
// $papa = new Papa;
// $papa->demo();
// $papa->demo1();

class Beta extends Papa{
    function demo2(){
        echo "I am Beta<br>";
    }
}
$beta = new Beta;
$beta->demo();
$beta->demo1();
$beta->demo2();
?>