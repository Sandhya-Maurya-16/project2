
<?php
 $con = mysqli_connect('localhost','root','','app25_task');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "select * from aboutme where id=$id";
    $record =mysqli_query($con,$sql);
    if(mysqli_num_rows($record)>0){
        $data=mysqli_fetch_assoc($record);
       $hobby=explode(',',$data['hobby']);
    }
?>
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
            align-items:center;
            color:#fff;
        }
        .outer{
            height:400px;
            width: 400px;
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
            width:50%;
            border-radius:8px;
            background:silver;
        }
        .col{
            background:blue;
        }
    </style>
</head>
<body>
    <div class="outer">
        <form action="" method="post">
            <div class="form-handel">
                <span>
                        Your name:
                        <input type="text" name="name" value=<?= $data['name']?> class="inp">
                </span>
                <span>
                        Hobby:
                        <input type="checkbox" <?=in_array('speak',$hobby)?'checked':''?> name="hobby[]" value="speak">speak
                        <input type="checkbox" <?=in_array('sona',$hobby)?'checked':''?> name="hobby[]" value="sona">Sona
                        <input type="checkbox" <?=in_array('khana',$hobby)?'checked':''?> name="hobby[]" value="khana">khana
                        <input type="checkbox" <?=in_array('listen',$hobby)?'checked':''?> name="hobby[]" value="listen">listen
                </span>
                <span>
                        Your district:
                        <select name="district" id="" class="inp">
                            <option value="">-select-</option>
                            <option value="mau" <?=$data['district']=='mau'?'selected':''?>>Mau</option>
                            <option value="gorakhpur" <?=$data['district']=='gorakhpur'?'selected':''?>>Gorakhpur</option>
                            <option value="ayodhya" <?=$data['district']=='ayodhya'?'selected':''?>>Ayodhya</option>
                        </select>
                </span>
                <span>
                        Your Massege:
                        <textarea name="massege" id="" class="inp"> value=<?= $data['massege']?> </textarea>
                </span>
                <span>
                        <input type="submit" class="inp col">
                </span>
            </div>
        </form>
    </div>
</body>
</html>
<?php
}else{
    header('Location:read.php');
}
?>