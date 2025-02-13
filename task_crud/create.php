
<?php
$con = mysqli_connect('localhost','root','','app25_task');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo"<script>
        alert('Enter your name');
        </script>";
    }elseif(empty($_POST['hobby'])){
        echo"<script>
        alert('Enter your Hobby');
        </script>";
    }elseif(empty($_POST['district'])){
        echo"<script>
        alert('Enter your District');
        </script>";
    }elseif(empty($_POST['massege'])){
        echo"<script>
        alert('Enter your Massege');
        </script>";
    }else{
        $name=$_POST['name'];
        $hobby=implode(',',$_POST['hobby']);
        $district=$_POST['district'];
        $massege=$_POST['massege'];
$sql ="insert into aboutme (name,hobby,district,massege) values('$name','$hobby','$district','$massege')";
if(mysqli_query($con,$sql)){
    echo"<script>
    alert('Data inserted Successfully');
    window.location.href='read.php';
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
                </span>
                <span>
                Hobby:
                <input type="checkbox" name="hobby[]" value="speak">speak
                <input type="checkbox" name="hobby[]" value="sona">Sona
                <input type="checkbox" name="hobby[]" value="khana">khana
                <input type="checkbox" name="hobby[]" value="listen">listen
                </span>
                <span>
                Your district:
                <select name="district" id="" class="inp">
                    <option value="">-select-</option>
                    <option value="mau">Mau</option>
                    <option value="gorakhpur">Gorakhpur</option>
                    <option value="ayodhya">Ayodhya</option>
                </select>
                </span>
                <span>
                Your Massege:
                <textarea name="massege" id="" class="inp"></textarea>
                </span>
                <span>
                <input type="submit" class="inp col">
                </span>
            </div>
        </form>
    </div>
</body>
</html>