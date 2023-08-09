<?php 

    $email = ' eullerson@gmail.com';
    $posicaoDoArroba = strpos($email, "@");
    $nome = substr($email, 0, 9); //Exibe/retorna uma parte da string do "índice" 0 à 9.
    $nome2 = "João"; //caracteres acentuados, armazenam o dobro de bytes;

    
    echo strtoupper($nome2) . PHP_EOL; //todas maiúsculas, mas não processa caracteres com acentos
    echo strtolower($nome2) . PHP_EOL . PHP_EOL; //todas minúsculas, mas não processa caracteres com acentos

    //agora com acentos:
    echo mb_strtoupper($nome2) . PHP_EOL; //todas maiúsculas, processa caracteres com acentos
    echo mb_strtolower($nome2) . PHP_EOL; //todas minúsculas, processa caracteres com acentos

    //Exibe uma parte da string à partir do "índice" 9.
    echo substr($email, 10) . PHP_EOL;

    //Exibe uma parte da string à partir do "índice" 9.
    echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

    //obter o tamanho de uma arrat em bytes:
    echo strlen($nome) . PHP_EOL;
    echo strlen($nome2) . PHP_EOL;

    echo trim($email) . PHP_EOL;
