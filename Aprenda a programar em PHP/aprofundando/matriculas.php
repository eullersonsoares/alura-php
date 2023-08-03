<?php 

    //array_merge():
    $alunos2022 = [
        "Zé",
        "Chico",
        "Fulano"
    ];

    $novosAlunos = [
        "Tião",
        "Beltrano",
        "Neto",
        "Zé" // aqui ele não sobrescreve o aluno do ano passado.
    ];

    $listaAtual = array_merge($alunos2022, $novosAlunos); //ou podemos "$alunos2022 + $novosAlunos" se quisermos adicionar mais alunos

    var_dump($listaAtual);
    //Na função acima, os índices são redefinidos.

    //Funcionalidade semelhante:
    $listaAtual2 = [...$alunos2022, 'Teste de incremento', ...$novosAlunos];

    PHP_EOL;

    var_dump(($listaAtual2));

    //"unpacking operator"...$array" para descontruir arrays e "spread operator" para passar para uma função mais de um argmuento