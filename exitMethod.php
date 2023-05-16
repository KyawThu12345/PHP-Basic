<?php 
$file = "mine.txt";
if(file_exists($file)){
   echo "File exist";
}else{
    exit ("File not exist");//exit method exits from program and below code is not worked
}
$handler = fopen($file,'r');
echo "<br>"."Good";
?>