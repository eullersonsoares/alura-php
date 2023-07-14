<?php 

    //Para incrementar um valor a $contador, podemos utilizar também o += 1
    for ($contador = 1; $contador <=15; $contador++) {
        if($contador == 13) {
            //continue; //para pular
            break; //para parar a execução antes que a condição do loop seja atendida.
        }

        echo "#$contador\n";
    };