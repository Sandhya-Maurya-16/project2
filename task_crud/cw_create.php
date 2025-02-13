<?php
// print_r($_POST);
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Enter your name');
        </script>";
    }else{
        $name=$_POST['name'];
        print_r($name);
        $con = mysqli_connect('localhost','root','','app25_task');
        $sql = "insert into cw (name) values($name):";
        if(mysqli_query($con,$sql)){
            echo "<script>
            alert('Data inserted');
            window.location.href='cw_read.php';
            </script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
   name:
    <input type="text" name="name">
    <input type="submit" value="submit">
   </form>
</body>
</html>