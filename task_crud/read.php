<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing:border-box;
        }
        body{
            height:100vh;
            width: 100%;
            background:#000;
            display:flex;
            justify-content:center;
            padding-top:50px;
        }
        .outer{
            min-height:100px;
            width: 90%;
            border-radius:15px;
            box-shadow:0px 0px 10px 5px silver;
            color:#f1f1f1;
        }
        .form-handel{
            display:flex;
            flex-direction:column;
            justify-content:center;
            gap:15px;
            padding: 30px;
        }
        .inp{
            height:30px;
            width:150px;
            padding:4px 24px;
            border-radius:8px;
            text-decoration:none;
            color:#f1f1f1;
            background:green;
        }
        .del{
            height:30px;
            width:150px;
            padding:4px 24px;
            border-radius:8px;
            text-decoration:none;
            color:#f1f1f1;
            background:red;
            margin:auto;
        }
        td,th{
            padding: 5px;
            text-align:center;
            border:1px solid;
        }
        thead{
            background-color:silver;
            color:black;
        }
    </style>
</head>
<body>
    <div class="outer">
            <div class="form-handel">
                <a href="create.php" class="inp">insert new data</a>
               <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>hobby</th>
                    <th>district</th>
                    <th>massege</th>
                    <th>opration</th>
                </tr>
                </thead>
                <tbody>
<?php
$con = mysqli_connect('localhost','root','','app25_task');
$sql = "select * from aboutme";
$record = mysqli_query($con,$sql);
if(mysqli_num_rows($record)>0){
    while($data=mysqli_fetch_assoc($record)){
?>
                <tr>
                <td><?= $data['id']?></td>
                <td><?= $data['name']?></td>
                <td><?= $data['hobby']?></td>
                <td><?= $data['district']?></td>
                <td><?= $data['massege']?></td>
                <td>
                <a href="delete.php?id=<?= $data['id']?>" class="del">delete</a>
                <a href="update.php?id=<?= $data['id']?>" class="del" style="background-color:green;">Update</a>
                </td>
                </tr>
                <?php
    }
}
                ?>
            </tbody>
            </table>
            </div>
        </form>
    </div>
</body>
</html>