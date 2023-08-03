<?php 

    /*
    
    $notas = [10, 8, 9, 7];

    $ordenadas = $notas;
    $desOrdenadas = $notas;

    sort($ordenadas);
 
    echo "Ordenadas" . PHP_EOL;
    var_dump($ordenadas);

    PHP_EOL;

    echo "Desordenadas" . PHP_EOL;
    var_dump($desOrdenadas);
    */
    //as ordenações acima (que utilizam "short()"), são realizadas em órdem alfabética e também domenor valor ao maior;

    $alunos = [
        [
            "aluno" => "Eullerson",
            "nota" => 10
        ],
        [
            "aluno" => "Thamires",
            "nota" => 6
        ],
        [
            "aluno" => "Yago",
            "nota" => 8
        ],

    ];

    //utilizando "usort()";

    function ensinandoAOrdenar(array $nota1, array $nota2): int 
    {
        /*if ($nota1['nota'] > $nota2['nota']) {
            return -1;
        } elseif($nota1['nota'] < $nota2['nota']) {
            return 1;
        };

        return 0;*/

        return $nota1['nota'] <=> $nota2['nota'];
    };

    rsort($alunos);
    var_dump($alunos);