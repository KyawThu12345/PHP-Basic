<?php 
session_start();
if(isset($_SESSION['username'])){
         header("Location: index.php");
}
include "links.php";
?>
<h1>Member Page</h1>