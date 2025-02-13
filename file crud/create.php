<?php
// print_r($_POST);
// print_r($_FILES);
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo"<script>
        alert('Name is required');
        </script>";
    }elseif(empty($_FILES['image']['name'])){
        echo"<script>
        alert('Image is required');
        </script>";
    }else{
        $name=$_POST['name'];
        $filename=time().$_FILES['image']['name'];
        $tmpname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"../upload/$filename");
        $sql = "insert into fileupload(name,image) values('$name','$filename')";
        if(mysqli_query($con,$sql)){
            echo"<script>
            alert('Data uploaded');
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
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Name : <input type="text" name="name">
        File : <input type="file" name="image">
        <button type="submit">Submit</button>
    </form>
</body>
</html>