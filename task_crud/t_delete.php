<?php
    $con= mysqli_connect('localhost','root','','app25_task');
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql = "delete from about where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data deleted succuccfully');
        window.location.href='t_read.php';
        </script>";
    }
}else{
    header('Location:t_read.php');
}
?>