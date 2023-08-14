<?php 

    require "./conta.php";

    $primeiraConta = new Conta();

    $primeiraConta->cpf = "200.100.300-20";
    $primeiraConta->nome = "Régis";
    $primeiraConta->saldo = 200;


    $segundaConta = new Conta();

    $segundaConta->cpf = "210.300.950-23";
    $segundaConta->nome = "Thiago";
    $segundaConta->saldo = 400;

    var_dump($primeiraConta);
    var_dump($segundaConta);