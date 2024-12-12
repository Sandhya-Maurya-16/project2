<?php
// implicite type casting
$var=100;
$sec="10";
$data= $var+$sec;
echo $data;
// *************************
$var=100;
$sec="10 day";
$data= $var+$sec;
echo $data."<br>";
// *****************************
$var=100;
$sec="10 days";
$data= $var.$sec."<br>";//string concanition
echo $data;
// explicite type casting
$val="100";
$s=(int)$val;
$v=(float)$val;
$t=(bool)$val;
print(gettype($val)."<br>");
print(gettype($s)." ");
print(gettype($v)."<br>");
print(gettype($t)."<br>");
print($t);
?>