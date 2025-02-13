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
            $sql="select * from signup1 where email='$email'";
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
            $sql= "insert into signup1(email,password)values('$email','$password')";
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
            height: 550px;
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
            <h1 align="center">SignUp Form</h1>
            <input type="email" placeholder="Email Address" name="email"/>
            <input type="password" placeholder="Password" name="password"/>
            <input type="password" placeholder="Confirm Password" name="c_password"/>
            <input class="btn4" type="submit" value="SignUp" />
        </form>
    </div>
</body>

</html>