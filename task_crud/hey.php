<?php
$a=[1,1,2,2,2,3,3,4,4,5,5];
$b=[];
foreach($a as $val){
    if(!in_array($val,$b)){
        $b[]=$val;
    }
}
echo "<pre>";
print_r($b);
?>