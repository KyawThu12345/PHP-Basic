<?php 
$alphabet = array(array("A","B","C","D"),
                  array("E","F","G","H","I"),
                  array("J","K","L","M","N","O"));
for($i=0;$i<count($alphabet);$i++){
    for($j=0;$j<count($alphabet[$i]);$j++){
       echo $alphabet[$i][$j]."\t";
    }
    echo "<br>";
}
?>