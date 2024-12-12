<?php
// string length method
$str=" Hello   World ";
echo "String length ".strlen($str)."<br>";

// trim method
$string=trim($str);
echo "String return trim value ".strlen($string)."<br>";

// repeat method
echo str_repeat('Hey',10)."<br>";

//OR same work as str_repeat
for($i=1;$i<=10;$i++){
    echo "Hey";
}
echo "<br>";

// str_replace method to replace the value
echo str_replace("World","Ram",$str)."<br>";
$str1="this is a book";
print_r(explode(" ",$str1));
echo "<br>";

// implode method
$arr1=["IT","is","implode","function","for","convertion","array","to","string"];
echo implode("/",$arr1)."<br>";

// str_split method
$var="This is my Leptop";
print_r(str_split($var));
echo "<br>";

//OR same work as str_split
for($i=0; $i< strlen($var);$i++){
    $arr3[] = $var[$i];
}
print_r($arr3);
echo "<br>";

// str_word_count method
$var1="This is my Leptop";
print_r(str_word_count($var1));


// array method
$arr=[10,20,null,true,'ram'];
echo "<br>";
echo "Array length ".count($arr);
echo "<br>";

//str reverse
$vari="Hello World";
for($i=strlen($vari); $i>=0;$i--){
    $arr4[] = $vari[$i];
}
// print_r($arr4);
echo implode(" ",$arr4);

?>