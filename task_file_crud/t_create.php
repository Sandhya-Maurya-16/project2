<?php
$con = mysqli_connect('localhost','root','','app25_file');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['country'])){
        echo "<script>
        alert('Country field requird');
        </script>";
    }elseif(empty($_FILES['image']['name'])){
        echo "<script>
        alert('Image field requird');
        </script>";
    }else{
        $country=$_POST['country'];
        $filename=time().$_FILES['image']['name'];
        $tmpname=$_FILES['image']['tmp_name'];
        move_uploaded_file($tmpname,"../upload/$filename");
$sql = "insert into file1(country,file) values('$country','$filename')";
if(mysqli_query($con,$sql)){
    echo "<script>
        alert('Data inserted successfully');
        window.location.href='t_read.php';
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
            margin:200px;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Country :   <select name="country" id="">
            <option value="">-select country-</option>
                        <option value="hey">hey</option>
                        <option value="hi">hi</option>
                        <option value="hello">hello</option>
                        <option value="helloguys">helloguys</option>
                    </select>  <br><br>
        File : <input type="file" name="image"> <br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>