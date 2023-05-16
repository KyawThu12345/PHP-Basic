<?php 
$ary = array(
    [
        "name"=> "Min Kyaw Thu",
        "age"=> 19,
        "subject"=> "html,css,java",
        "married"=> false,
    ],
    [
        "name"=> "Kyaw Thu",
        "age"=> 20,
        "subject"=> "html,css,js",
        "married"=> true,
    ],
    [
        "name"=> "Min Thu",
        "age"=> 21,
        "subject"=> "html,css,python",
        "married"=> false,
    ],
);
echo json_encode($ary);

?>