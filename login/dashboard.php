<?php
session_start();
if(!isset($_SESSION['logindata'])){
    header('Location:login.php');
}
?>
<style>
body{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}
.hi{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
    .circle{
        height: 200px;
        width: 200px;
        border-radius: 50%;
        border: 10px solid purple;
    }
</style>
<body>
<h2 style="text-align: center; font-size:50px; font-family:cursive; color:purple;margin-bottom:150px; font-weight:600; line-height:70px;">Welcome to Dashboard</h2>
<div class="hi">
<div class="circle">
<h5  style="text-align:center; font-size:40px; font-weight:600;"><?= $_SESSION['logindata']?></h5>
<h6 style="text-align:center; margin-top:-60px;"><a style="font-size:20px; font-family:cursive; color:red;" href="logout.php">Logout</a></h6>
</div>
<div class="circle">
<h5  style="text-align:center; font-size:40px; font-weight:600;"><?= $_SESSION['logindata']?></h5>
<h6 style="text-align:center; margin-top:-60px;"><a style="font-size:20px; font-family:cursive; color:red;" href="logout.php">Logout</a></h6>
</div>
<div class="circle">
<h5  style="text-align:center; font-size:40px; font-weight:600;"><?= $_SESSION['logindata']?></h5>
<h6 style="text-align:center; margin-top:-60px;"><a style="font-size:20px; font-family:cursive; color:red;" href="logout.php">Logout</a></h6>
</div>
<div class="circle">
<h5  style="text-align:center; font-size:40px; font-weight:600;"><?= $_SESSION['logindata']?></h5>
<h6 style="text-align:center; margin-top:-60px;"><a style="font-size:20px; font-family:cursive; color:red;" href="logout.php">Logout</a></h6>
</div>
<div class="circle">
<h5  style="text-align:center; font-size:40px; font-weight:600;"><?= $_SESSION['logindata']?></h5>
<h6 style="text-align:center; margin-top:-60px;"><a style="font-size:20px; font-family:cursive; color:red;" href="logout.php">Logout</a></h6>
</div>
</div>
</body>