<?php
//__________________________$_REQUEST_________________________________________
// print($_SERVER['PHP_SELF']);
// print($_SERVER['REQUEST_METHOD']);
// echo "<br>";
// print_r($_REQUEST);
?>
<form action="secondpage.php">
    <label for="first">Name</label>
    <input type="text" id="first" name="name">
    <label for="email">Email</label>
    <input type="email" name="email">
    <input type="submit" >
</form>