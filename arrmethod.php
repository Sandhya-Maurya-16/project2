<?php
$arr =[1,4,6,7,3];
array_push($arr,[6,5,4]);
array_push($arr,[6,5,4]);
echo "<pre>";
echo "Push operation<br><br>";
print_r($arr);
array_pop($arr);
echo "Pop operation<br><br>";
print_r($arr);
array_unshift($arr,[6,5,4]);
array_unshift($arr,[6,5,4]);
echo "Unshift operation<br><br>";
print_r($arr);
array_shift($arr);
echo "Shift operation<br><br>";
print_r($arr);
?>