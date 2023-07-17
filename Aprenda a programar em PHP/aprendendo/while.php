<?php 
    $contador = 1;

    do {
        echo ($contador == 5 ) ? "$contador#" . PHP_EOL : "#$contador" . PHP_EOL;
        $contador += 1;
    } while($contador <= 10);