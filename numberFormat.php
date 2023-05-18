<?php 
$number = 1000000;
echo $number . "<br>";
echo number_format($number)."<br>";
echo number_format($number,2)."<br>";//($number,decimal number)
echo number_format($number,4)."<br>";
echo number_format($number,3,".",",");// result = 1,000,000.000
?>