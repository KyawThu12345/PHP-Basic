<?php 
function doIt($num1){
    echo $num1;
}
$num = "doIt";
$bool = function_exists($num);
if ($bool){
    $num(1);
}else{
    echo "There is no function.";
}
?>

