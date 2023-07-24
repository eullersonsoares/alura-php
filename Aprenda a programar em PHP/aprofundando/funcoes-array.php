<?php 

// Em arrays associativo, só podemos utilizar strings ou numbers no índice. Os demais valores, serão convertidos.
$array = [
    0 => "um", 
    1 => "dois",
    2 => "tres",
];


foreach ($array as $number => $value) {
    echo "índice: $number | valor: $value" . PHP_EOL;
};

//o mais utilizado é o count(), mas segue outro exemplo:
echo 'Total: ' . count($array). ' e também ' . sizeof($array) . PHP_EOL;

