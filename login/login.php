<?php
 session_start();
 if(isset($_SESSION['logindata'])){
    header('Location:dashboard.php');
 }
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=='admin' && $password=='admin'){
        $_SESSION['logindata']=$username;
        header('Location:dashboard.php');
    }else{
        echo "<script>
        alert('Username or password is not matched');
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
        body{
            height: 100vh;
            width: 100wh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }
        input{
            height: 40px;
            width: 400px;
            border-radius: 12px;
        }
        button{
            height: 40px;
            width: 200px;
            border-radius: 12px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>