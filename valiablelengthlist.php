<?php
// spred operator(...)
//We can parse multiple argument in one parameter. It programm not throught error.
function variablelength(...$list){
    echo "Hello";
    print_r($list);
}
echo "<h3>spred operator(...)</h3>";
variablelength(1,2,3,4,"Apple",6,7,8,9,10);
?>
<?php
// strick parameter behaviour
//We can parse same type argument like as parameter type
function strictfunc(int $a,int $b){
    echo $a+$b."<br>";
}
echo "<h3>strick parameter behaviour</h3>";
strictfunc(10,10);
strictfunc("10",10);
// strictfunc(10,"a"); error datatype (integer , string)
?>