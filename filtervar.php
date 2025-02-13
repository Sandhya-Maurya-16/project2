<?php
// $email = "vishal@gmail.com";
// $id ="10a";
// // ***************
// // var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
// // var_dump($email);
// // filter_var($email,FILTER_SANITIZE_STRING);
// // var_dump($email);
// // *************
// echo filter_var($id,FILTER_SANITIZE_NUMBER_INT);
// echo isset($_POST['email'])?$_POST['email']:'';
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $ip = "127.0.0.1a";
    if(empty($name)){
        echo "Name is required";
    }elseif(empty($email)){
        echo "Email is required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Email is NOT VALID";
    }elseif(!filter_var($ip,FILTER_VALIDATE_IP)){
        echo "IP is NOT VALID";
    }else{
        echo "IP is valid";
    }
}
?>
<form action="" method="post">
<input type="text" name="name" id="" placeholder="name">
<input type="email" name="email" id="" placeholder="email">
<input type="submit" value="submit">
</form>