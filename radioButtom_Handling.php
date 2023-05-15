<?php 
  if(isset($_POST['submit'])){
     $color = $_POST['myRadio'];
     echo "your choose = ". $color."<br>";
  }

?>
<form action="<?php $_PHP_SELF?>" method="post">
     <input type="radio" name="myRadio" value="red">red<br>
     <input type="radio" name="myRadio" value="green">green<br>
     <input type="radio" name="myRadio" value="blue">blue<br>
     <button type="submit" name="submit">Choose</button>
</form>