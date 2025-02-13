<?php
// print_r($_POST);
$con = mysqli_connect('localhost','root','','app25_crud');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Please Enter Your Name');
        window.location.href='contact.php';
        </script>";
    }elseif(empty($_POST['phone'])){
        echo "<script>
        alert('Please Enter Your Mobile No');
        window.location.href='contact.php';
        </script>";
    }elseif(empty($_POST['email'])){
        echo "<script>
        alert('Please Enter Your Email');
        window.location.href='contact.php';
        </script>";
    }elseif(empty($_POST['massege'])){
        echo "<script>
        alert('Please Enter Your Massege');
        window.location.href='contact.php';
        </script>";
    }else{
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $massege=$_POST['massege'];
    $sql = "insert into contactus(name,phone,email,massege) values('$name','$phone','$email','$massege')";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data inserted Successfully');
        window.location.href='contactshow.php';
        </script>";
    }
}
}
?>