<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="create.php">Insert new data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>operation</th>
        </tr>
        <?php
$con = mysqli_connect('localhost','root','','app25_crud');
$sql = "select * from fileupload";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($data = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $data['id']?></td>
            <td><?= $data['name']?></td>
            <td><img src="../upload/<?= $data['image']?>" alt="" height="50px" width="50px"></td>
            <td><a href="delete.php?id=<?= $data['id']?>">Delete</a></td>
            <td><a href="update.php?id=<?= $data['id']?>">Update</a></td>
        </tr>
        <?php      
    }
}
        ?>
    </table>
</body>
</html>