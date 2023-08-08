<?php 

    $nome = "Eullerson Soares";

    [$nome, $sobrenome] = explode(" ", $nome);
    
    echo "Nome: $nome" . PHP_EOL;
    echo "Sobrenome: $sobrenome" . PHP_EOL;
