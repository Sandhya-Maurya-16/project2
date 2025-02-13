<?php
echo "<pre>";
print_r($_GET);
?>
<form action="" method="get">
   <label for="name">Name</label>
<input type="text" name="name">
<label for="email">Email</label>
<input type="email" name="email">
<input type="range" name="range">
<select name="country" id="">
    <option value="India">India</option>
    <option value="MAU">MAU</option>
    <option value="Gorakhpur">Gorakhpur</option>
    <option value="Khalilabad">Khalilabad</option>
</select>
<label for="gender">gender</label>
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">Female
<input type="color" name="color">
<div style="height:200px;width:200px;border-radius:8px;background-color:<?=$_GET['color']?>">
    <input type="date" name="date">
</div>
<button type="submit">submit</button>
</form>
