<?php
// print_r($_POST);
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
if(empty($_POST['country'])){
    echo "<script>
           alert('Please Enter Your Country');
           window.location.href='select.php';
           </script>";
}elseif(empty($_POST['hobby'])){
    echo "<script>
           alert('Please Enter Your Hobby');
           window.location.href='select.php';
           </script>";
}else{
    $country=$_POST['country'];
    $hobby=implode(',',$_POST['hobby']);
    $sql= "insert into subject (country,subject) values('$country','$hobby')";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data inserted seccessfully');
        window.location.href='select.php';
        </script>";
        
    }
}
}
?>