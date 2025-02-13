<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
$con = mysqli_connect('localhost','root','','app25_crud');
$sql = "delete from fileupload where id=$id";
    if(mysqli_query($con,$sql)){
        echo"<script>
        alert('Data Deleted');
        window.location.href='read.php';
        </script>"; 
    }
}else{
    header('location:read.php');
}
?>