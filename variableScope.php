<?php 
$num = 1;//GLOBAL variable
function number(){
    $num = 2;//LOCAL variable
    echo $num;
}
echo $num."<br>";
number();
?>