<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','app25_crud');
    $sql = "delete table personal where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data deleted successfully');
        window.location.href='readcmp';
        </script>";
    }
}else{
    header('Location:readcmp.php');
}
?>