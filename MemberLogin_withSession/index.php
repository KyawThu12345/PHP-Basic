<?php 
session_start();
include"links.php";

if(isset($_POST['submit'])){
        $user = $_POST['name'];
        $pass = $_POST['password'];
    if($user == "Min Kyaw Thu" && $pass == "123"){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header("Location: Member.php");
    }else{
        echo "You are not a valid user.";
    }
}
?>
<h1>Index Page</h1><br>
<form action="<?php $_PHP_SELF?>" method="post">
<input type="text" name="name" placeholder="username"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<button type="submit" name="submit">Login</button>
</form>
