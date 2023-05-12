
<div style='text-align:center'>
    <?php 
 if(isset($_POST['submit'])){
    if($_POST['username'] == "Min Kyaw Thu" && $_POST['password'] == "12345"){
    echo "Login Success.";
    }else{
        echo "username and password is incorrect.";
    }
}
    ?>
</div>
<h1 style='text-align :center;margin-top: 150px'>Welcome</h1>
<form  style ="width:500px ;height :500px;margin:0 auto;text-align :center"action="<?php $_PHP_SELF?>" method="post">
<input style='width:400px;height:30px'type="text" placeholder="Username" name="username">
<input style='width:400px;height:30px;margin-top: 20px;'type="text" placeholder="Password" name="password">
<button style='width:100px;height:30px;margin-top: 20px;color:darkblue'type="submit" name="submit">Log In</button>
</form>
