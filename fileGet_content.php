<?php 
function readMyFile($fileName){
    if(file_exists($fileName)){
        $data =  file_get_contents($fileName);//file_get_contents => String data => No Limit
        return $data;                         //fread => Binary Value => Limited Character[Sometimes use fread()]
    }else{
        return "File not found";
    }     
}
echo readMyFile('text.txt');
?>