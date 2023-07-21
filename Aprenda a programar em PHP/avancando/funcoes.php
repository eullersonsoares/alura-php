<?php 

function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
};

function sacar(array $conta, float  $valor): array
{
    if($conta['saldo'] < $valor) {
        exibeMensagem("Saldo insuficiente");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
};

function depositar(array $conta, float $valor): array
{
    if($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Transação inválida. Tentativa de depósito negativo!");
    }
    return $conta;
};

function titularComLetrasMaiusculas(array &$conta)
{
    //Posso utilizar nativo do php:
    //$conta['titular'] = strtoupper($conta['titular']);

    //Para utilizar a extensão mb string:
    $conta['titular'] = mb_strtoupper($conta['titular']);
};