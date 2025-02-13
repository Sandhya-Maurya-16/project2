<?php
$res = fopen('demo.txt','a');
echo fwrite ($res," It is demo file");
fclose($res);
?>