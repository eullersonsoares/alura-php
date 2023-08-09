<?php 

    $texto = "Texto com qualquer coisa: poxa, caramba.";

    echo str_replace(["poxa", "caramba", "."], ["p***", "c******"], $texto) . PHP_EOL;

    //ou para substituir a string podemos:

    echo strtr($texto, "poxa", "*_(") . PHP_EOL;
    //Essa função trabalha apenas com caracteres;

    //para trabalhar com palavras:
    echo strtr($texto, ["poxa" => "p***", "caramba" => "c******"]) . PHP_EOL;