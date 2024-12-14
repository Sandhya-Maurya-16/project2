<?php

// Push operation :-
$arr =[1,4,6,7,3];
array_push($arr,[6,5,4]);
array_push($arr,[6,5,4]);
echo "<pre>";
echo "<U><B>Push operation :-</B></U><br><br>";
print_r($arr);

// Pop operation :-
array_pop($arr);
echo "<U><B>Pop operation :-</B></U><br><br>";
print_r($arr);

// Unshift operation :-
array_unshift($arr,[6,5,4]);
array_unshift($arr,[6,5,4]);
echo "<U><B>Unshift operation :-</B></U><br><br>";
print_r($arr);

// Shift operation :-
array_shift($arr);
echo "<U><B>Shift operation :-</B></U><br><br>";
print_r($arr);

// Array merge :-
$a=[2,4,6,7];
$b=[3,8,6,4];
echo "<U><B>Array merge :-</B></U><br><br>";
$c = array_merge($a,$b);
print_r($c);

// Array compact :-
$a=1;
$b=2;
$c="sandhya";
echo "<U><B>Array compact :-</B></U><br><br>";
$c = compact('a','b','c');
print_r($c);

// Array Sort(Assending) :-
$a=[2,40,6,70,1];
echo "<U><B>Array Sort(Assending) :-</B></U><br><br>";
sort($a);
print_r($a);

// Array Sort (Dessending) :-
$a=[2,40,6,70,1];
echo "<U><B>Array Sort(Assending) :-</B></U><br><br>";
rsort($a);
print_r($a);

// Array Range :-
echo "<U><B>Array Range :-</B></U><br><br>";
print_r(range(3,9));
//OR
echo "<U><B>Array Range(A-z) :-</B></U><br><br>";
print_r(range("A","z"));

// Array combine :-]
// Syntax= array_combine(array1(key),array2(value));
echo "<U><B>Array_combine(key,value) :-</B></U><br><br>";
$key=range("a","f");
$value = range(0,5);
$arr=array_combine($key,$value);
print_r($arr);

// Array_search() :-]
// Syntax= array_search(value,array_name);
echo "<U><B>array_search(value,array_name) :-</B></U><br><br>";
$value = ["cow","dog","fox","ant","ice"];
$arr=array_search("dog",$value);
print_r($arr);
?>