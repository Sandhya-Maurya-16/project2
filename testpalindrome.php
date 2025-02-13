<?php
$n=121;
$org=$n;
$res=0;
 while($n!=0){
    $rem=$n%10;
    $res=$res*10+$rem;
    $n=$n/10;
}
 if($res=$org){
    echo "It is a palindrome";
 }else{
    echo "It is NOT palindrome";

 }
?>