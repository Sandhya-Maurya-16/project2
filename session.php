<?php
session_start();
$_SESSION['user']=['name'=>'ram','pass'=>'1234'];
$_SESSION['hello']=['name'=>'ram','pass'=>'1234'];
print_r($_SESSION);
?>