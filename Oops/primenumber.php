<?php
class Math{
 function stri(){
   $str="aaadddcccddss";
   $var=str_split($str);
   $unique=[];
   foreach($var as $key=>$val){
    if(in_array($unique,$var)){
        continue;
    }else{
        $unique[]=$val;
        $var=$val;
    }
   }
 }
}
$table =new Math;
$table->stri();
// ?>
<!-- //prime //factorial//aaadddcccddss->adcs -->