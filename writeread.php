<?php
$res = fopen('techsima.txt','w+');
// echo fread ($res,filesize("demo.txt"));
fwrite ($res,"This is hdhuehue");
fclose($res);
?>