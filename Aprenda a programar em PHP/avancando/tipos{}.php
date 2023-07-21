<?php 
    $array = [
            1 => "a"
        ];

    /*
        foreach ($array as $i) {
            echo $i . PHP_EOL;
        }
    */

    //Exempo Heredoc (com verificações de escape):
    $string = 
    <<<END
        string$array[1],
    string2,
        string3 
    END;

    var_dump($string);

    echo PHP_EOL . PHP_EOL;

    //Exempo Nowdoc (sem verificações de escape):
    $string2 = 
    <<<'LABEL'
        string1,
    string2,
        string3 
    LABEL;

    var_dump($string2);