<?php 

// Em arrays associativo, só podemos utilizar strings ou numbers no índice. Os demais valores, serão convertidos.
$array = [
    1 => "um", 
    true => "dois",
    1.2 => "tres",
];

var_dump($array);