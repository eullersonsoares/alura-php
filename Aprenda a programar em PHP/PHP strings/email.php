<?php 

    function show_email_content(string $nome):void 
    {
        $conteudoEmail = <<<END
        Olá, suporte!

        Me chamo $nome e preciso de uma força com a plataforma que contratamos de vocês. 
        
        Att.,
        END;

        echo $conteudoEmail . PHP_EOL;
    }

    show_email_content("Eullerson");