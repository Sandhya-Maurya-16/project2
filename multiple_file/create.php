<?php
$con = mysqli_connect('localhost','root','','app25_file');
if($_SERVER['REQUEST_METHOD']=='POST'){
foreach($_FILES['file']['name'] as $key=>$val){
    // echo $val;
    // echo $_FILES['file']['tmp_name'][$key];
    move_uploaded_file($_FILES['file']['tmp_name'][$key],"image/$val");
}
$image = implode(',',$_FILES['file']['name']);
$sql = "insert into multifile(image) values('$image')";
if(mysqli_query($con,$sql)){
    echo"<script>
    alert('Data uploaded');
    window.location.href='read.php';
    </script>"; 
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
        File : <input type="file" multiple name="file[]">
        <button type="submit">Upload</button>
    </form>
</body>
</html>