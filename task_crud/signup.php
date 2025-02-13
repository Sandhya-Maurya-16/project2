<?php
$con=mysqli_connect('localhost','root','','app25_task');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['email'])){
        echo "<script>
        alert ('Email is required');
        </script>";
    }elseif(empty($_POST['password'])){
        echo "<script>
        alert ('Password is required');
        </script>";
    }elseif(empty($_POST['c_password'])){
        echo "<script>
        alert ('Confirm Password is required');
        </script>";
    }else{
        $email=sanitize($_POST['email']);
        $password=sanitize($_POST['password']);
        $c_password=sanitize($_POST['c_password']);
        if(!empty($email)){
            $sql="select * from signup where email='$email'";
            $data=mysqli_query($con,$sql);
            if(mysqli_num_rows($data)>0){
                echo "<script>
                alert ('Email Already Exist');
                </script>"; 
            }elseif ($password!= $c_password){
                echo "<script>
                alert ('Password or confirm password not matched');
                </script>";  
            }else {
            $sql= "insert into signup(email,password)values('$email','$password')";
            if(mysqli_query($con,$sql)){
                    echo "<script>
                    alert ('Account created successfully');
                    window.location.href='login.php';
                    </script>";  
            }
             }
        }
    }
}
function sanitize($data){
    $sanitizedata = trim($data);
    $sanitizedata = htmlspecialchars($sanitizedata);
    return $sanitizedata;
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
            font-size: 19px;
        }
        
        h1 {
            margin-top: 8px;
            margin-bottom: 25px;
        }
        /* first form end */
    </style>
</head>

<body>
    <div class="form1">
        <form action="" method="post" class="outer">
            <h1 align="center">Signup Form</h1>
            <input type="email" placeholder="Email Address" name="email" />
            <input type="password" placeholder="Password" name="password" />
            <input type="password" placeholder="Confirm Password" name="c_password" />
            <input class="btn2" type="submit" value="Signup" />
            <center> <a href="login.php">Login now</a><span>If you member?</span></center>
        </form>
    </div>
</body>

</html>