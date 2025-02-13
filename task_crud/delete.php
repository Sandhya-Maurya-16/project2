<?php
print_r($_GET['id']);
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $con = mysqli_connect('localhost','root','','app25_task');
    $sql = "delete from aboutme where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data deleted successfully');
        window.location.href='read.php';
        </script>";
    }
}
?>