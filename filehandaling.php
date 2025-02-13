<?php
$res= fopen("panda.png",'r');
// echo fread($res, filesize("panda.png"));
$photo = fread($res, filesize("panda.png"));
$dest = fopen("cute.png",'w');
fwrite($dest,$photo);
fclose($dest);
fclose($res);
?>