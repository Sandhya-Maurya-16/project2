<?php
function prime($a){
    $count=0;
    if($a>1){
    for($i=2;$i<$a;$i++){
        if($a%$i==0){
              $count++;
        }
    }
    }
if($count==0){
    echo $a." is Prime Number<br>";
  }
  else{
    echo $a." is Not Prime<br>";
  }
}
prime(11);
prime(20);
prime(54);
prime(19);
prime(13);
prime(100);

?>