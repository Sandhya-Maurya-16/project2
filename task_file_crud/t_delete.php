<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
$con = mysqli_connect('localhost','root','','app25_file');
$sql = "delete from file1 where id=$id";
if(mysqli_query($con,$sql)){
    echo "<script>
    alert('Data deleted successfully');
    window.location.href='t_read.php';
    </script>";
}
}
?>