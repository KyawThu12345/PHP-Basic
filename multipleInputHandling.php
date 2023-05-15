<?php 
if(isset($_POST['submit'])) {
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    echo "Your Name = ".$uname."<br> Your Email = ".$email."<br> Your Password = ".$pass."<br>";

    $gender = $_POST['gender'];
    echo $gender."<br>";
    $subject = $_POST['Subjects'];
    foreach($_POST['Subjects'] as $subject) {
        echo $subject."<br>";
    }

    // $subject = $_POST['Subjects'];
    // foreach($subject as $subject){
    //        echo $subject;
    // }
    foreach($_FILES['files']['tmp_name'] as $key=> $value) {
        move_uploaded_file($_FILES['files']['tmp_name'][$key], 'uploadPhoto/'.$_FILES['files']['name'][$key]);
    }
}
?>

<form action="<?php $_PHP_SELF?>" method="post" enctype="multipart/form-data">
<h2>Login in</h2>
<input type="text" name="username" placeholder="Username"><br>
<input style ="margin-top: 10px;"type="email" name="email" placeholder="Email"><br>
<input style ="margin-top: 10px;"type="password" name="password" placeholder="Password"><br>
<h3>Choose Gender</h3>
<input type="radio" name="gender" value="Male">Male</input><br>
<input type="radio" name="gender" value="Female">Female</input>
<h3>Choose Subject</h3>
<input type="checkbox" name="Subjects[]" value="HTML">HTML</input><br>
<input type="checkbox" name="Subjects[]" value="CSS">CSS</input><br>
<input type="checkbox" name="Subjects[]" value="JavaScript">JavaScript</input><br><br>
<input type="file" name="files[]"multiple><br><br>
<button type="submit" name="submit">Register</button>
</form>
