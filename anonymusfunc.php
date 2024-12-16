<?php
$add=function($a){
$fact=1; 
for($i=$a;$i>=1;$i--){
$fact=$fact*$i;
}
echo "factorial of ".$a." is = ".$fact."<br>";
};
$add(5);
?>
<?php
$sub=function(){
return 20-5;
};
echo $sub();
?>
<?php
$add1=function($a,$b){
echo "<br>";
echo $a+$b;
};
$add1(20,40);
?>