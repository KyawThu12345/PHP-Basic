<?php 
$file = "file.txt";
$handler = fopen($file,'w');
fwrite($handler,"Hello World");
fclose($handler);
?>