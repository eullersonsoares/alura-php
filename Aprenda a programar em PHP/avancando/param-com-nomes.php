<?php 
    function Hi(string $nome = 'Eullerson', int $idade = 21, bool $trabalha = true) {
        $ocupacao = $trabalha ? "está trabalhando" : "não está trabalhando";

        echo "$nome tem $idade anos e atualmente $ocupacao" . PHP_EOL;
    };

    //Erro ao chamar a função:
        //Hi(23, "Thiago", false);

    //Correção:
    Hi(idade : 23, nome : "Thiago", trabalha : false);
    
    /* A ideia, não é "bagunçar" a sequência de parâmetros, mas em casos em que se faz necessário pular um parâmetro. Isso se torna possivel. Exemplo:
       Se Miguel tiver a mesma idade de Eullerson, mas não estiver trabalhando como thiago:
    */
    
    Hi(nome: "Miguel", trabalha: false);
    // Não é necessário passar um segundo parâmetro.