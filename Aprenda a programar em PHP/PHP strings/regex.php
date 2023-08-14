<?php 

    $telefones = ['(84) 99322-1100', '(86) 9-9322 1122', 'a(84) 9322-1328'];
    $regEx = "/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4}$)/";

    function matches(string $tel):bool
    {
        $result = preg_match("/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4}$)/", $tel, matches: $correspondencia);

        //var_dump($correspondencia);

        return $result;
    }

    foreach($telefones as $telefone) {
        if(matches($telefone)) {
            echo "O telefone $telefone é válido" . PHP_EOL;
        } else {
            echo "O telefone $telefone é inválido" . PHP_EOL;
        }

        echo preg_replace(
            $regEx,
            "*** /2",
            $telefone
        ) . PHP_EOL;
    }