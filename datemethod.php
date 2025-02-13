<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        margin:80px 50px;
        display: flex;
        /* justify-content:space-between; */
    }
    .outer{
        height:500px;
        width: 500px;
        box-shadow:1px 1px 10px 5px gray;
        padding:20px;
        text-align:center;
        border-radius:50%;
        animation: nam 6s infinite ;
    }
    @keyframes nam {
        0%{
            background:linear-gradient(0deg,green 50%,purple 50%);
        }
        20%{
            background:linear-gradient(90deg,purple 50%,red 50%);
        }
        40%{
            background:linear-gradient(180deg,red 50%,yellow 50%);
        }
        60%{
            background:linear-gradient(270deg,pink 50%,blue 50%);
        }
        80%{
            background:linear-gradient(360deg,blue 50%,skyblue 50%);
        }
        100%{
            background:linear-gradient(0deg,skyblue 50%,aqua 50%);
        }
    }
    </style>
</head>
<body>
    <?php
// include('include1.php');
// require('include1.php');
require_once('include1.php');//require_once agr koi file galti se ek se adhik bar include ho gyi ho 
// aur jarurt ek bar ho to eska use karte hai uske bad yh ek bar hi run hoga
require_once('include1.php');
require_once('include1.php');
require_once('include1.php');

    ?>
    <div class="outer">
<?php
echo "Current year is = ".date("Y")."<br>";
echo "Current year is = ".date("y")."<br>";
echo "Current month is = ".date("M")."<br>";
echo "Current month is = ".date("m")."<br>";
echo "Current Day is = ".date("D")."<br>";
echo "Current date is = ".date("d")."<br>";
echo "Current hour(24hr) is = ".date("H")."<br>";
echo "Current hour(12hr) is = ".date("h")."<br>";
echo "Current minute is = ".date("i")."<br>";
echo "Current second is = ".date("s")."<br>";
echo "Current time is = ".date("A")."<br>";
echo "Current time is = ".date("a")."<br>";
echo "Current time is = ".date("p")."<br>";
echo "Get System timing = ".date_default_timezone_get()."<br>";
echo "Or Get System timing = ".date("e")."<br>";
echo "Set India timing = ".date_default_timezone_set("Asia/kolkata")."<br>";
echo "Current hour(24hr) is = ".date("H")."<br>";
echo "Current hour(12hr) is = ".date("h")."<br>";
echo "Current minute is = ".date("i")."<br>";
echo "Current second is = ".date("s")."<br>";
echo "Current time is = ".date("A")."<br>";
echo "Current second is = ".date("d/m(M)/Y(y) h:i:s a D")."<br>";
echo "Current second is = ".date("g")."<br>";
$a=mktime(1,2,3,4,5,6);
echo date("Y/m/d h:i:s:a",$a);
echo "<br>string to time convertion ";
echo date("y-m-d",strtotime("10/12/2006 12:10:20 am"));
?>
</div>
</body>
</html>