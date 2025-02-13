<form action="radiopost.php" method="post">
Country :
 <select name="country" id="">
    <option value="">--Select country--</option>
    <option value="India">India</option>
    <option value="Sreelanka">Sreelanka</option>
    <option value="Nepal">Nepal</option>
</select>
<small style="color:red"><?= isset($_GET['countryerror']) ? $_GET['countryerror'] : ''?></small>
<br>
Gender : <input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">Female <br>
<small style="color:red"><?= isset($_GET['gendererror']) ? $_GET['gendererror'] : ''?></small>
<input type="submit" name="validation" value="validate">

</form>