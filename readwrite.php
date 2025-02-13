<?php
$res = fopen('demo.txt','r+');
echo fread ($res,filesize("demo.txt"));
fwrite ($res,"This is hdhuehue");
fclose($res);
?>