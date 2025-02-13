<?php
$con = mysqli_connect('localhost','root','','app25_file');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    if(empty($_FILES['image']['name'])){
        $filename=$_POST['oldimage'];
    }else{
    $filename=time().$_FILES['image']['name'];
    $tmp_file=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_file,"../upload/$filename");
    }
    $sql = "update file set name='$name',gender='$gender',file='$filename' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data updated successfully');
        window.location.href='read.php';
        </script>";
    }
}
if(isset($_GET['id'])){
    $id=$_GET['id'];
$sql = "select * from file where id=$id";
$record = mysqli_query($con,$sql);
if(mysqli_num_rows($record)>0){
    $data=mysqli_fetch_assoc($record);
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
        <input type="hidden" value="<?= $data['id']?>" name="id">
        Name : <input type="text" name="name" value="<?= $data['name']?>"> <br><br> 
        Gender : <input type="radio" value="male" name="gender" <?=$data['gender']=='male'?'checked':''?>>Male
                    <input type="radio" value="female" name="gender" <?=$data['gender']=='female'?'checked':''?>>Female <br><br> 
                    <input type="hidden" name="oldimage" value="<?= $data['file']?>">
        File :  <input type="file" name="image"> <br><br>
        <img src="../upload/<?= $data['file']?>" alt="..." height="50px" width="50px">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
}
}else{
    header('Location:read.php');
}
?>