<?php 
$qry = $_SERVER['QUERY_STRING'];//? behind,text can write.

switch ($qry){
       case "home" : header("Location: home.php");break;
       case "about" : header("Location: about.php");break;
       case "contant" : header("Location: contant.php");break;
       default: echo "There does not exist page that request. ";
}

?>