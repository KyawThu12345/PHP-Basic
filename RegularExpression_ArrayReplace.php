<?php 
$var = "Brighter Myanmar Copyright @ 2009";
$result = preg_replace(
    array('/copyright/i','/[0-9]+/'),
    array('Computer Class','2011'),
    $var
);
echo "<pre>".print_r($result,true)."</pre>";
?>