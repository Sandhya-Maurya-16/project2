<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['a'])){
        echo "<script>
        alert('Enter a number');
        </script>";
    }else{
        $a=$_POST['a'];
        $count=0;
if($a>1){
        for($i=2;$i<$a;$i++){
            if($a%$i==0){
                $count++;
            }
            }
            if($count==0){
                echo "It is prime prime";
            }else{
                echo "Not A prime";
            }
        }
else{
    echo "Not A prime";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    Enter a Number:
    <input type="number" name="a">
    <input type="submit" value="submit">
  </form>
</body>
</html>