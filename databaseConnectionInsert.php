<?php 
define("DB_HOST","localhost");
define("DB_NAME","test");
define("DB_USERNAME","root");
define("DB_PASS","");

function dbConnect(){

    mysqli_report(MYSQLI_REPORT_OFF);
    $mysqli = @new mysqli(DB_HOST,DB_USERNAME,DB_PASS,DB_NAME);
    if ($mysqli->connect_errno) {
        error_log('Connection error: ' . $mysqli->connect_errno);
    } else {
        return $mysqli;
    }
}
function executeQuery($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result)>0){
        foreach($result as $item){
            echo "Id is => ".$item['id']."<br>";
            echo "Name is => ".$item['name']."<br>";
            echo "Email is => ".$item['email']."<br>";
            echo "Password is => ".$item['password']."<br>";
            echo "<br>";
        }}}
function retrieveSingleData($qry){
    // $qry = "SELECT * FROM users WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);   
    if(mysqli_num_rows($result)>0){
      foreach($result as $data){
              echo "Id is ".$data["id"]."<br>";
              echo "Name is ".$data["name"]."<br>";
              echo "Email is ".$data["email"]."<br>";
              echo "Password is ".$data["password"]."<br>";
      }
    }
}
function insertData($qry){
     $db = dbConnect();
     $result = mysqli_query($db,$qry);
     echo $result >0 ? "Data Insert Successful" .mysqli_insert_id($db): "Data Insert Fail";
}

function insertUniqueData($name,$email,$pass){
        $qry = "SELECT * FROM users WHERE name= '$name'";
        $db = dbConnect();
        $ret = mysqli_query($db,$qry);
        if(mysqli_num_rows($ret)>0){
            echo "User name is already in use!";
        }else{
            $qry = "INSERT INTO users (name,email,password)
            VALUES('$name','$email','$pass')";
            $result = mysqli_query($db,$qry);
            echo $result>0 ? "Data Insert Successfull".mysqli_insert_id($db): "Data Insert Fail!";  
        }        
}
function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}
function errDubbger($data){
    echo "<pre>".print_r($data,true)."</pre>";
    
}
$qry = "SELECT * FROM users";
$extra = null;
$pass = passGen(123);
echo $pass; 

$qry = "SELECT * FROM users WHERE id!=4";
$qry = "INSERT INTO users VALUE(0,'Mg Mg','mgmg@gmail.com','$pass','')";
insertUniqueData("Aung Aung","aungaung@gmail.com",$pass);  
?>