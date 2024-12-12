<?php
$a=100;
$b=20;


echo "Add = ".$a+$b."<br>"; //arithmetic op


echo "sub = ".$a-$b."<br>"; //arithmetic op


echo "mult = ".$a*$b."<br>"; //arithmetic op


echo "div = ".$a/$b."<br>"; //arithmetic op

// ************************************************************************
echo "modulus = ".$a%$b."<br>"; //arithmetic op + string op(.)

// *********************************************************
$a+=10; // $a = $a + 10;
echo "assingn = ".$a."<br>"; // assignment op

// ******************************************************
$c= $a==110; // comparison op
echo $c;
var_dump($c);
echo "<br>";

$d= $a<=$b; // comparison op
echo $d;
var_dump($d);
echo "<br>";


// ******************************************************
$m=false; // logical op
$n=20;
$s=$m ||$n;
echo $s."<br>";

$m=false; // logical op
$n=20;
$s=$m && $n;
echo $s."<br>";

$s= !$m;
echo $s."<br>";

// ******************************************************
$u=9;
$v=9;
echo "pre-increment = ".++$v."<br>"; //unary op
echo "post-increment = ".$u++."<br>"; //unary op
echo "current_value = ".$u."<br>"; //unary op
echo $u++ + $u."<br>"; //unary op

// ***************************************************
$i =9;
$j =10;
echo $a == $b?"hello":"hey pagli"; //ternary op*c   






?>
