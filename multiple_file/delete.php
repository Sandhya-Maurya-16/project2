<?php
$con = mysqli_connect('localhost','root','','app25_file');
if(isset($_GET['id'])){
    $id=$_GET['id'];
$sql = "delete from multifile where id=$id";
if(mysqli_query($con,$sql)){
    echo"<script>
    alert('Data delete succussfully');
    window.location.href='read.php';
    </script>";
}
}
?>