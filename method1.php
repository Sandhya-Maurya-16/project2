<?php
$str1 = "hello world";
echo ucfirst($str1);
echo "<br>";
$str2 = "Hello World";
echo lcfirst($str2);
echo "<br>";
$str3 = "hello world";
echo ucwords($str3);
echo "<br>";
$str4 = "hello World";
echo strtoupper($str4);
echo "<br>";
echo strtolower($str4);
echo "<br>";

$str5 = "hello world";
$str6 = "hello World";
echo strcmp($str5,$str6);
echo "<br>";
?>