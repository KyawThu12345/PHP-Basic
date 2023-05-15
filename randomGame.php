<?php 
$p1 = 0;
$p2 = 0;
$fair = 0;
$player1 = rand(0,10);
$player2 = rand(0,10);
for($i = 0;$i<100;$i++){
    if($player1>$player2){
        $p1++;
    }else if($player1==$player2){
        $fair++;
    }else{
        $p2++;
    }
} 
echo "Player 1 wins ".$p1." times"."<br>";
echo "Player 2 wins ".$p2." times"."<br>";
echo "Fair Play is ".$fair." times"."<br>";
?>