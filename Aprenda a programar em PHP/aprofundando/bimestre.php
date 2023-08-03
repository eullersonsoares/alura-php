<?php 

    $notasBimestre1 = [
        "Eullerson" => 8,
        "Renata" => 10,
        "Alisson" => 9,
        "Zé" => 2
    ];

    $notasBimestre2 = [
        "Eullerson" => 8,
        "Renata" => 10
    ];

    $notasBimestre3 = [
        "Eullerson" => 8,
        "Renata" => 6
    ];

    echo "Notas que não se repetem no segundo e terceiro bimestre" . PHP_EOL;

    var_dump(array_diff($notasBimestre1, $notasBimestre2, $notasBimestre3));
    //O "array_diff" verifica que valores do primeiro array não estão presentes no segundo ou demais

    echo "Alunos que estiveram no primeiro Bimestre, mas não nos demais" . PHP_EOL;

    var_dump(array_diff_key($notasBimestre1, $notasBimestre2, $notasBimestre3));
    //verifica utilizando as chaves

    echo "Alunos que tiraram notas diferentes" . PHP_EOL;

    var_dump(array_diff_assoc($notasBimestre2, $notasBimestre3));
    //retorna um array com a chave que tereve o valor alterado (para mais ou para menos).

    PHP_EOL;

    echo "Alunos faltantes" . PHP_EOL;

    $alunosQueFaltaram = array_diff_key($notasBimestre1, $notasBimestre2);
    $nomes = array_keys($alunosQueFaltaram); //retorna um novo array contendo as chaves como valores;
    $notas = array_values($alunosQueFaltaram); //retorna um array com os valores;

    PHP_EOL;

    echo "Organizando lista de alunos por notas" . PHP_EOL;

    var_dump(array_combine($notas, $nomes));
    //acima, ele converte chaves em valores e valores em chaves. Você pode fazer também com "array_flip"

    var_dump(array_flip($alunosQueFaltaram));