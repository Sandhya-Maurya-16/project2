<?php
function number($num){
    if($num<=10){
        echo "Number ".$num."<br>";
        // return number($num+1); OR
        echo number($num+1); 
    }
}
echo number(1);
?>
<?php
function factorial($num){
    if($num<0){
      return 0;
    }
    if($num==0){
        return 1;
    }
    return $num*factorial($num-1);
}
echo factorial(5);
?>