<?php
print_r($_POST);
// print_r($_POST['hobby']);
// print_r($_POST['hobby'][0]);
if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['validation'])){
    if(empty($_POST['hobby'])){
        // echo"please select atleast one hobby";
        echo"<script>alert(' please select atleast one hobby');</script>";
        // echo"<script>//.............................................................other page pr jane ke liye
        // alert(' please select atleast one hobby');
        // window.location.href='checkbox.php';
        // </script>";
    }else{
        print_r($_POST['hobby']);
    }
}}
?>

<form action="" method="post">
Hobby : <br>
<input type="checkbox" name="hobby[]" value="Game">Game <br>
<input type="checkbox" name="hobby[]" value="Song">Song <br>
<input type="checkbox" name="hobby[]" value="Dance">Dance <br>
<input type="checkbox" name="hobby[]" value="Creative">Creative <br>
<input type="submit" name="validation">
</form>