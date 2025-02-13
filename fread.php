<?php
$data=fopen("text.txt","r");
// echo fread($data,100);
// echo fread($data,filesize('text.txt'));
// echo fgets($data);//read and print first line
while(!feof($data)){
    echo fgets($data);//read first charector and print him 
}
fclose($data);
?>