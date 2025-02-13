<?php
session_start();
print_r($_SESSION);
// session_unset();//for remove all session data
// session_destroy();//For delete all session data
unset($_SESSION['hello']);//For delete specific session variable
?>