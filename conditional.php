<?php
$var = 100;
// if($var == '100' && $var === 100){
//     echo "Eqal<br>";
// }
// *************************************************
// if($var++ == '100' && ++$var != 102){
//     echo "Buddhi Gayab<br>";
// }
// elseif($var++ + ++$var > 110){
//     echo "sab bhul gye";
// }
// **********************************************************
// if($var++ == '100' && ++$var != 102):
//     echo "It is imposible <br>";
// elseif($var++ + ++$var > 110):
//     echo "Hm bhi hai bhai <br>";
// else:
//     echo "Suno ji";
// endif;
// **********************************************************
$a=10;
if($a++ == 10 && ++$a != 12):
    echo "It is imposible <br>";
elseif(--$a + $a++ == 24):
    echo "Hm bhi hai bhai <br>";
elseif($a - $a++ + --$a == 25):
    echo "Kuch nhi aa rha h";
else:
    echo $a;
endif;
?>
