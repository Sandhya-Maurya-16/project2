<?php
// print_r($_GET);
$con= mysqli_connect('localhost','root','','app25_task');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Name field required');
        </script>";
    }elseif(empty($_POST['fname'])){
        echo "<script>
        alert('Father name field required');
        </script>";
    }elseif(empty($_POST['mname'])){
        echo "<script>
        alert('Mother name field required');
        </script>";
    }elseif(empty($_POST['date'])){
        echo "<script>
        alert(' DOB field required');
        </script>";
    }elseif(empty($_POST['gender'])){
        echo "<script>
        alert('Gender field required');
        </script>";
    }else{
        $id=$_POST['id'];
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];
$sql = "update about set name='$name',fname='$fname',mname='$mname',date='$date',gender='$gender' where id=$id";
if(mysqli_query($con,$sql)){
    echo "<script>
        alert(' Date updated successfully');
        window.location.href='t_read.php';
        </script>";
}
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
   $sql = "select * from about where id=$id";
   $record = mysqli_query($con,$sql);
   if(mysqli_num_rows($record)>0){
    $data = mysqli_fetch_assoc($record);
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
            color:#ffffff;
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
            color:#000;
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
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <input type="text" name="name" value="<?=$data['name']?>" class="inp">
                </span><span>
                Father's name:
                <input type="text" name="fname" value="<?=$data['fname']?>" class="inp">
                </span><span>
                Mother's name:
                <input type="text" name="mname" value="<?=$data['mname']?>" class="inp">
                </span><span>
                D.O.B:
                <input type="date" name="date" value="<?=$data['date']?>">
                </span><span>
                Gender:
                <input type="radio" name="gender" <?=$data['gender']=='male'?'checked':''?> value="male">male
                <input type="radio" name="gender"  <?= $data['gender']=='female'?'checked':''?> value="female">Female
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
}
}else{
    header('Location:t_read.php');
}
?>