<?php
$con = mysqli_connect('localhost','root','','app25_file');
if($_SERVER['REQUEST_METHOD']=='POST'){
$id=$_POST['id'];
    if(empty($_FILES['file']['name'])){
        $imagename=$_POST['oldimage'];
    }else{
        foreach($_FILES['file']['name'] as $key=>$var){
            move_uploaded_file($_FILES['file']['tmp_name'][$key],"image/$var");
        }
    $imagename = implode(',',$_FILES['file']['name']);
    $sql= "update multifile set image=$imagename where id=$id";
    if(mysqli_query($con,$sql)){
        echo"<script>
        alert('Data Update succussfully');
        window.location.href='read.php';
        </script>";
    }
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
$sql = "select * from multifile where id=$id";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($data=mysqli_fetch_assoc($result)){
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
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <input type="hidden" name="oldimage" value="<?= $data['image']?>">
        File : <input type="file" multiple name="file[]">
        <img src="" alt="">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
<?php
}
}
}
?>