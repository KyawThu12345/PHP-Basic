<?php 
$files = "test.json";
$handler = fopen($files,'r');
$json = fread($handler,filesize($files));
$ary = json_decode($json);

foreach($ary as $key=> $vals){
       foreach($vals as $key=> $val){
        echo "Key => ".$key."<br>"."Value => ".$val."<br>";
       }
}


?> 