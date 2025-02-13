<?php
  $count=0;
  $a=123;
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
?>
