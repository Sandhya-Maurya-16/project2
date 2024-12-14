<?php
function abc($str){
    $count=0;
    for($i=0;$i<=strlen($str)-1;$i++){
        if(ord("a")<=ord($str[$i]) && ord("z")>=ord($str[$i])){
              $count++;
        }
}
if($count==$i){
    echo"Lower Case";
  }
  else{
    echo"Upper Case";
  }
}
abc("dsASvs");
?>
