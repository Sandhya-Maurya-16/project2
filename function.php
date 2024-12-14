<!-- Function With No-Return Type and No Argument:- -->
<?php
function hello(){
    echo "Hello Sandhya";
}
echo "<h1>Function With No-Return Type and No Argument:-</h1>";

hello();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
hello();
    ?>
    <br>
</body>
</html>

<!-- Function With Return Type No Argument:- -->
<?php
function hey(){
    for($i=1;$i<=5;$i++){
        $a[]=$i."<br>";
    }
    return $a;
}
echo "<h1>Function With Return Type No Argument:-</h1>";

print_r(hey());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
print_r(hey());

    ?>
</body>
</html>


<!-- Function No Return Type With Argument:- -->
<?php
function calculator($a,$b,$s){
    if($s == '+'){ 
    echo "Addition =".$a+$b."<br>";
    }
    elseif($s == '-'){ 
    echo "Substraction =".$a-$b."<br>";
    }
    elseif($s == '*'){ 
    echo "Multiply =".$a*$b."<br>";
    }
    elseif($s == '/'){ 
    echo "Division =".$a/$b."<br>";
    }
}
echo "<h1> Function No Return Type With Argument(Calculator):-</h1>";
calculator(200,5,"+");
calculator(200,5,"-");
calculator(200,5,"*");
calculator(200,5,"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
calculator(200,20,"+");
calculator(200,20,"-");
calculator(200,20,"*");
calculator(200,20,"/");
    ?>
</body>
</html>



<!-- Function No Return Type With Argument(Table):- -->
<?php
function table($a){
    for($i=1;$i<=10;$i++){
       echo $a*$i."<br>";
    }
}
echo "<h1> Function No Return Type With Argument(Table):-</h1>";
table(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
    table(3);
    ?>
</body>
</html>
<!-- Function No Return Type With Argument(string Reverse):- -->
<?php
function strre($str){
   echo strrev($str);
}
echo "<h1> Function No Return Type With Argument(string Reverse):-</h1>";
strre("sandhya Maurya");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
strre("Sanju Paswan");
    ?>
</body>
</html>