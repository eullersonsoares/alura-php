<?php 

    require "./conta.php";

    $primeiraConta = new Conta();

    // $primeiraConta->cpf = "200.100.300-20";
    // $primeiraConta->nome = "Régis";
    // $primeiraConta->saldo = 200;

    //$segundaConta = new Conta();

    // $segundaConta->cpf = "210.300.950-23";
    // $segundaConta->nome = "Thiago";
    // $segundaConta->saldo = 400;
    
    //var_dump($primeiraConta);

    //$terceiraConta = $segundaConta;

    // $terceiraConta->saldo = 100;
    // $terceiraConta->depositar(40);
    // $terceiraConta->sacar(130);
    //var_dump($terceiraConta);

    // $primeiraConta->transferir(200, $segundaConta);

    echo Conta::$nContas . PHP_EOL;