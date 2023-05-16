<?php 
$file = "mine.txt";
try{
    if(file_exists($file)){
       echo "File exist.";
    }else{
        throw new Exception("File not found");
    }
}catch(Exception $e){
      echo $e-> getMessage();
}
?>