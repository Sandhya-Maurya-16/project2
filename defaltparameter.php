<?php
function defaultParameter($age=18,$a=0){
echo($age>=18)?"Eligible for Vote .<br>":"not Eligible for Vote .<br>";
}
echo  "<h3>Default Parameter in PHP</h3>";
defaultParameter();
defaultParameter(16);
defaultParameter(20,3);
?>