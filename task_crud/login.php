<?php
session_start();
$con=mysqli_connect('localhost','root','','app25_task');
if(isset($_SESSION['logindata'])){
    header('Location:t_read.php');
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="Select * from signup where email='$email' and password='$password'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        $_SESSION['logindata']=$email;
        header('Location:t_read.php');
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
        
        .form1 {
            width: 80%;
            height: 550px;
            margin: 80px auto;
    padding: 10px;
            background-image: linear-gradient(to left, #a845b1, #f3429a);
        }
        
        .outer {
            width: 30%;
            margin: 0px auto;
            margin-top: 50px;
            background-color: #fff;
            padding: 25px 35px;
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
            color: #f3429a;
            text-decoration: none;
            font-size: 19px;
        }
        
        h1 {
            margin-top: 8px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <div class="form1">
        <form class="outer" action="" method="post">
            <h1 align="center">Login Form</h1>
            <input type="email" placeholder="Email Address" name="email"/>
            <input type="password" placeholder="Password" name="password"/><br/>
            <input class="btn2" type="submit" value="Login" />
            <center>Not a member?<span><a href="signup.php">Signup now</a></span></center>
        </form>
    </div>
</body>

</html>