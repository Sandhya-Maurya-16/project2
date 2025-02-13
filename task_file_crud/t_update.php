<?php
$con = mysqli_connect('localhost','root','','app25_file');
if(isset($_GET['id'])){
$id=$_GET['id'];
$sql = "select * from file where id=$id";
$record = mysqli_query($con,$sql);
if(mysqli_num_rows($record)>0){
    $data=mysqli_fetch_assoc($record);
    print_r($data['country']);
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
                        <option  <?= $data['country']=='hey'?'selected':''?> value="hey">hey</option>
                        <option value="hi" <?= $data['country']=='hi'?'selected':''?>>hi</option>
                        <option value="hello" <?= $data['country']=='hello'?'selected':''?>>hello</option>
                        <option value="helloguys" <?= $data['country']=='helloguys'?'selected':''?>>helloguys</option>
                    </select>  <br><br>
        File : <input type="file" name="image"> <br><br>
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