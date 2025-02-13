<?php
// class Demo{
//     function __destruct()
//     {
//         echo "Hello destructor";
//     }
//     function __construct()
//     {
//         echo "Hello Constructor";
//     }
// }
// new Demo;
class Demo{
    function __destruct()
    {
        echo "Hello destructor";
    }
    function __construct()
    {
        echo "Hello Constructor";
    }
   function test(){
    echo "Hello Test";
   }
}
$demo = new demo();
$demo->test();
?>