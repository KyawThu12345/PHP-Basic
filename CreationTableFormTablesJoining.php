<?php 
define("DB_HOST","localhost");
define("DB_NAME","best");
define("DB_USERNAME","root");
define("DB_PASS","");
function dbConnect(){

    // mysqli_report(MYSQLI_REPORT_OFF);
    $mysqli = @new mysqli(DB_HOST,DB_USERNAME,DB_PASS,DB_NAME);
    if ($mysqli->connect_errno) {
        error_log('Connection error: ' . $mysqli->connect_errno);
    } else {
        return $mysqli;
    }
}
function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);
    return $pass;
}
function errDubbger($data){
    echo "<pre>".print_r($data,true)."</pre>";
}
$qry = "CREATE TABLE IF NOT EXISTS subjects(
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) NOT NULL,
    PRIMARY KEY (id)
);";
// $qry = "CREATE TABLE IF NOT EXISTS users(
//     id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR (255) NOT NULL, 
//     creator INT (10) NOT NULL,
//     email VARCHAR (255) NOT NULL,
//     password VARCHAR (255) NOT NULL,
//     UNIQUE KEY email (email)
// );";

$result = mysqli_query(dbConnect(),$qry);
echo $result ? "Table Created Successfully" : "Table Creation Fails";

?>