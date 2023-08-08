<?php 

    $urlAlura = "https://alura.com.br/";

    if(str_starts_with($urlAlura, "https")) {
        echo "É uma URL segura\n";
    } else {
        echo "É uma URL insergura\n";
    };

    echo PHP_EOL;

    if(str_ends_with($urlAlura, ".br")){
        echo "É um domínio do Brasil\n";
    } else {
        echo "Não é um domínio do Brasil\n";
    }