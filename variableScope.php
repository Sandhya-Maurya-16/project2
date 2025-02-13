<?php

//local variable

function demo(){
    $x="local variable";
    echo $x;
}
echo $x;
demo();

//global variable

$a = "globle variable";
function globvar(){
    global $a;
    echo $a;
}
echo "<br>This is variable type :",$a;
echo "<br>";
globvar();
echo "<br>";
//static variable

function staticvar(){
    static $a=0;
    $a++;
    echo $a."<br>";
}
staticvar();
staticvar();
staticvar();
staticvar();
staticvar();
staticvar();
staticvar();
staticvar();
staticvar();

?>