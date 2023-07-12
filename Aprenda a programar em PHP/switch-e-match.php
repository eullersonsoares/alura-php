<?php

abstract class Question {}
class single {}
class multiple {}

/*utilizando switch:
    $param = 'abc';

    switch($param) {
        case 'single':
            $variable = new single();
            break;
        case 'multiple':
            $variable = new multiple();
            break;
        default:
            throw new Exception('Invalid question type');
    }

var_dump($variable);

problemas: lhe dar com o default constantemente, não esquecer o break;
*/

//utilizando match:
    $param = "multi";

    $variable = match($param) {
        "single" => new single(),
        "multi", "multiple" => new multiple(),
        default => throw new InvalidArgumentException("Questão inválida")
    };

var_dump($variable);

//O match traz soluções para as questões antes apresentadas no switch. (muito bom)
