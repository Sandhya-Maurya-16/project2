<?php
session_start();
if(!isset($_SESSION['logindata'])){
header('Location:login.php');
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
    <a href="create.php">New Data insert</a>
    <a href="logout.php">Logout</a>
    <table>
        <tr>
            <th>ID</th>
            <th>image</th>
            <th>Action</th>
        </tr>
        <?php
$con = mysqli_connect('localhost','root','','app25_file');
$sql = "select * from multifile";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($record = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $record['id']?></td>
            <td>
                <?php 
                $im=explode(',', $record['image']); 
                foreach($im as $val){
                ?>
        <img src="image/<?= $val?>" alt="" height="100px">
       <?php
       }     
       ?>
            </td>
            <td>
                <a href="delete.php?id=<?= $record['id']?>">Delete</a>
                <a href="update.php?id=<?= $record['id']?>">Update</a>

            </td>
        </tr>
        <?php
    }
}
        ?>
    </table>
</body>
</html>