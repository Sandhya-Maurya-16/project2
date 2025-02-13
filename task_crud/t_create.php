<?php
session_start();
if(!isset($_SESSION['logindata'])){
header('Location:login.php');
}
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $con= mysqli_connect('localhost','root','','app25_task');
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
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];
$sql = "insert into about (name,fname,mname,date,gender) values('$name','$fname','$mname','$date','$gender')";
if(mysqli_query($con,$sql)){
    echo "<script>
        alert(' Date inserted successfully');
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
                <input type="text" name="name" class="inp">
                </span><span>
                Father's name:
                <input type="text" name="fname" class="inp">
                </span><span>
                Mother's name:
                <input type="text" name="mname" class="inp">
                </span><span>
                D.O.B:
                <input type="date" name="date">
                </span><span>
                Gender:
                <input type="radio" name="gender" value="male">male
                <input type="radio" name="gender" value="female">Female
                </span>
                <span>
                <input type="submit" class="inp col">
                </span>
            </div>
        </form>
    </div>
</body>
</html>