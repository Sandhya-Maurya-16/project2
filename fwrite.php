<?php
$res=fopen("demo.txt",'w');
$data="This is write file in this file we can write operaton";
echo fwrite($res,$data);
fclose($res);
?>