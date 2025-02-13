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
    <title>batch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
.admin-batch-container {
    min-height: 300px;
    width: 100%;
    background: #f5f0ed;
    /* margin: 50px auto; */
    padding-bottom: 50px;
}
.admin-batch-text {
    font-size: 20px;
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
}
.admin-batch-button {
    width: 100%;
    min-height: 50px;
    padding: 15px;
}
.admin-batch-bLink {
    text-decoration: none;
    font-size: 12px;
    letter-spacing: 0.5px;
    word-spacing: -2px;
    padding: 6px;
    color: #fff;
    background: #389af0;
    border: none;
    float: right;
}
.admin-batch-bLink:hover {
    outline: 2px solid #389af0;
    background: #fff;
    color: #389af0;
    transition: all ease-in-out 0.3s;
}
.admin-batch-tableOuter {
    width: 98%;
    padding: 20px;
    border-collapse: collapse;
    margin: auto;
}
.admin-batch-tableHead {
    border: 1px solid rgb(83, 82, 82);
    padding: 10px;
    background: #153450;
    color: #fff;
}
.admin-batch-tableData {
    border: 1px solid rgb(83, 82, 82);
    padding: 30px;
    color: #000;
}
tr:nth-child(even) {
  background-color: gray;
}
tr:nth-child(odd) {
  background-color: silver;
}
.admin-batch-img {
    width: 60px;
    height: 60px;
}
.admin-batch-tdText {
    font-size: 14px;
    font-family: Arial, Helvetica, sans-serif;
}
.admin-batch-actionLink {
    text-decoration: none;
    color: #000;
    margin:0px 8px;
    font-size: 20px;
}
.admin-batch-buttonIcon {
    padding: 2px 10px;
    background: #153450;
    border: 1px solid #ccc;
    color: #fff;
}
    </style>
    <script>
    const deleteItem = (id) => {
        let conf = window.confirm("Are you sure ? ");
        if(conf){
            window.location.href = `delete.php?id=${id}`;
        }else{
            alert("Please allow");
        }
};
    </script>
</head>
<body>
<div class="admin-batch-container">
        <h2 class="admin-batch-text"><i class="fa fa-file"></i> MANAGE BATCH</h2>
        <div class="admin-batch-button">
            <a href="crud.php" class="admin-batch-bLink">Create New Batch</a>
            <a href="logout.php" class="admin-batch-bLink" id="logout">Logout</a>
        </div>
        <table class="admin-batch-tableOuter" >
            <thead>
                <tr>
                    <th class="admin-batch-tableHead">S.No.</th>
                    <th class="admin-batch-tableHead">fname</th>
                    <th class="admin-batch-tableHead">lname</th>
                    <th class="admin-batch-tableHead">phone</th>
                    <th class="admin-batch-tableHead">email</th>
                    <th class="admin-batch-tableHead" colspan="3" >Operation</th>
                </tr>
            </thead>
            <tbody>
<?php 
$con = mysqli_connect('localhost','root','','app25_crud');
$sql = "select * from registration";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($record = mysqli_fetch_assoc($result)){
        ?>
                <tr>
                    <td class="admin-batch-tableData"><?= $record['id']?></td>
                    <td class="admin-batch-tableData"><?= $record['fname']?></td>
                    <td class="admin-batch-tableData"><?= $record['lname']?></td>  
                    <td class="admin-batch-tableData"><?= $record['phone']?></td>
                    <td class="admin-batch-tableData"><?= $record['email']?></td>
                    <td class="admin-batch-tableData">
                            <a href="update.php?id=<?= $record['id']?>" class="admin-batch-actionLink"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0);" onclick="deleteItem(<?= $record['id']?>)" class="admin-batch-actionLink"><i class="fa fa-trash"></i></a> 
                            <img src="/admin/imajes/but_ban_small.png">
                    </td>
                </tr>
<?php
  }
}
?>
            </tbody>
        </table>
    </div>
    <script>
        var log = document.getElementById('logout');
        setTimeout(()=>{
            log.click();
        },10000);
    </script>
</body>
</html>