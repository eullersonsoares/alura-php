<?php 

    class Pessoa
    {
        public function __construct(
            private string $nome,
            private string $cpf,
            private \DateTimeInterface $nascimento
        ) 
        {}

        public function nomeCompleto():string
        {
            return $this->nome;
        }

        public function idade():int 
        {
            $hoje = new DateTimeImmutable();

            return $this->nascimento->diff($hoje)->y;
        }
    }

    //em outro arquivo:
    $pessoa = new Pessoa("Eullerson Soares", "123.456.789-10", new \DateTimeImmutable("2000-12-14"));

    echo "{$pessoa->nomeCompleto()} tem {$pessoa->idade()} anos" . PHP_EOL;