<?php
echo "<pre>";
echo "My name is ".$_GET['name']."<br>";
echo "My Email is ".$_GET['email']."<br>";
echo "My Father's name is ".$_POST['fname']."<br>";
echo "My Mobile number is ".$_POST['number']."<br>";
echo "GET method ";
print_r($_GET);
echo "post method ";
print_r($_POST);
?>
<!-- *****************************get method***************************** -->
<form action="" method="get">//print_r($_POST); me get method print kabhi nhi krega kevl post ka hi krega
   <label for="name">Name</label>
<input type="text" name="name">
<label for="email">Email</label>
<input type="email" name="email">
<button type="submit">getMethod</button>
</form>

<!-- **********************post method*************************** -->
<form action="" method="post">
   <label for="fname">FName</label>
<input type="text" name="fname">
<label for="number">Number</label>
<input type="number" name="number">
<button type="submit">postMethod</button>
</form>