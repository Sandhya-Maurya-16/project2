<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>GENDER</th>
            <th>FILE</th>
            <th>Action</th>
        </tr>
        <?php
$con = mysqli_connect('localhost','root','','app25_file');
$sql = "select * from file";
$record = mysqli_query($con,$sql);
if(mysqli_num_rows($record)>0){
    while($data=mysqli_fetch_assoc($record)){
        ?>
        <tr>
            <td><?= $data['id']?></td>
            <td><?= $data['name']?></td>
            <td><?= $data['gender']?></td>
            <td><img src="../upload/<?= $data['file']?>" alt="" height="100px"></td>
            <td>
            <a href="delete.php?id=<?= $data['id']?>">Delete</a>
            <a href="update.php?id=<?= $data['id']?>">Update</a>
            </td>
        </tr>
        <?php
              
    }
}
?>
    </table>
</body>
</html>