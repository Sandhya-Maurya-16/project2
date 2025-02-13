<?php
session_start();
$con=mysqli_connect('localhost','root','','app25_task');
if(isset($_SESSION['logindata'])){
    header('Location:read.php');
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="Select * from signup1 where email='$email' and password='$password'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['logindata']=$email;
        echo "register";
        header('Location:read.php');
    }else{
        echo "<script>
        alert ('Email or confirm passwird missmatch');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        input {
            width: 98%;
            height: 45px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 300;
            border: 1px solid rgb(189, 197, 213);
            padding: 15px 15px;
            margin: 10px 0px;
        }
        
        .btn {
            width: 49%;
            background-image: linear-gradient(to left, #a845b1, #f3429a);
            border-style: none;
        }
        
        .btn1 {
            width: 49%;
            border-style: none;
        }
        
        .btn2 {
            background-image: linear-gradient(to left, #a845b1, #f3429a);
            font-size: 19px;
            font-weight: 300;
            border-style: none;
        }
        
        label {
            font-size: 18px;
            font-weight: 400;
        }
        
        span {
            color: #f3429a;
            font-size: 19px;
        }
        
        a {
            font-size: 19px;
        }
        
        h1 {
            margin-top: 8px;
            margin-bottom: 25px;
        }
    
        .outer2 {
            width: 80%;
            height: 450px;
            margin: 60px auto;
            background-image: conic-gradient(#000 0deg, #000 90deg, #9a99db 90deg, #9a99db 180deg, #9a99db 180deg, #9a99db 270deg, #000 270deg, #000 360deg);
        }
        
        .second {
            height: 80%;
            width: 33.5%;
            margin:50px 400px;
            border: 2px solid #fff;
            border-radius: 10px;
            float: left;
            width: 30%;
            background-color: #fff;
            padding: 25px 35px;
        }
        
        .btn3 {
            width: 49%;
            background-image: linear-gradient(to left, #0052a4, #1c3651);
            color: #fff;
        }
        
        .btn4 {
            background-image: linear-gradient(to left, #0052a4, #081828);
            font-size: 19px;
            font-weight: 300;
            color: #fff;
        }
      
    </style>
</head>

<body>
    <div class="outer2">
        <form class="second" action="" method="post">
            <h1 align="center">Login Form</h1>
            <input type="email" placeholder="Email Address" name="email"/>
            <input type="password" placeholder="Password" name="password"/><br/>
            <input class="btn4" type="submit" value="Login" />
            <center> <a>Not a member?</a><span style="font-size: 19px; color: #0052a4;"> Signup now</span></center>
        </form>
    </div>
</body>

</html>