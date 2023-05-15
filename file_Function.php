<?php 
function creatFile($filename){
         $handler = fopen($filename,'w');

         fclose($handler);
}
creatFile('text.txt');

function writeFile($fileName,$data){
  $handle = fopen($fileName,'w');
  fwrite($handle,$data);
  fclose($handle);
}
writeFile('text.txt',"Hello World");

function appendFile($Filename,$data){
         $handle = fopen($Filename,'a');
         fwrite($handle,$data);
         fclose($handle);
}
appendFile('text.txt',' Kyaw Thu ');
//readFile is a method.Don't use this in naming.
function readMyFile($FileName){
         $handle = fopen($FileName,'r');
         $size = filesize($FileName);
         $data = fread($handle,$size);
         fclose($handle);
         return $data;
}
echo readMyFile('text.txt');
?>