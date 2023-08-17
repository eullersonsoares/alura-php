<?php 

    class Conta
    {
        //definindo dados da conta;
        private string $cpf;
        private string $nome;
        
        //public: torna a propriedade pública.
        private float $saldo;
        //O que o professor ensina é a manter as propriedades SEMPRE privadas e apenas métodos públicos.

        public static $nContas = 0;

        public function __construct() {
            $this->saldo = 0;

            self::$nContas++;
        }
        
        public function __destruct() {
                echo "Instância removida" . PHP_EOL;
        }

        public function consultarNome():string
        {
            return $this->nome;
        }

        public function consultarCPF():string
        {
            return $this->cpf;
        }

        public function consultarSaldo():float
        {
            return $this->saldo;
        }

        // Desnecessário:
        // public function definirNome(string $n):void 
        // {
        //     $this->nome = $n;
        // }

        // public function definirCPF(string $CPF):void 
        // {
        //     $this->cpf = $CPF;
        // }

        public function sacar(float $valorASacar):void
        {
            if($valorASacar > $this->saldo) {
                echo "Valor indisponível" . PHP_EOL;
                return;
            }
            
            $this->saldo -= $valorASacar;
        }

        public function depositar(float $valorADepositar):void
        {
            if($valorADepositar > 0) {
                $this->saldo += $valorADepositar;
                return;
            }

            echo "Deposite um valor positivo" . PHP_EOL;
        }

        public function transferir(float $valorATransferir, Conta $contaDestino):void
        {
            if($valorATransferir > $this->saldo) {
                echo "Ops! Você não possui saldo o suficiente!" . PHP_EOL;
                return;
            }

            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
            echo "Transação realizada com sucesso!" . PHP_EOL;
        }
    }