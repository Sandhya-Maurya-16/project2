<?php
// print_r($_GET);
if(isset($_GET['id'])){
    $id =$_GET['id'];
    $con = mysqli_connect('localhost','root','','app25_crud');
    $sql = "delete from registration where id=$id";
    if(mysqli_query($con,$sql)){
    echo "<script>
    alert('Your Data deleted Successfully');
    window.location.href='read.php';
    </script>";
    }
}else{
    header('location:read.php');
}
?>