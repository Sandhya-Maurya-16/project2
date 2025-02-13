<?php
$con = mysqli_connect('localhost','root','','app25_file');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Name field is required');
        </script>";
    }elseif(empty($_POST['gender'])){
        echo "<script>
        alert('Gender is required');
        </script>";
    }elseif(empty($_FILES['image'])){
        echo "<script>
        alert('Image is required');
        </script>";
    }else{
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $mainimg=time().$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,"../upload/$mainimg");
        $sql = "insert into file (name,gender,file) values('$name','$gender','$mainimg')";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data inserted successfully');
        window.location.href='read.php';
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
    <style>
        body{
            margin:100px;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Name : <input type="text" name="name"> <br><br> 
        Gender : <input type="radio" value="male" name="gender">Male
                 <input type="radio" value="female" name="gender">Female <br><br> 
        File :  <input type="file" name="image"> <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>