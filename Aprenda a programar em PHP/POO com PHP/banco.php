<?php 

    require_once "conta.php";

    $conta1 = new Conta();

    $conta1->definirNome("Eullerson Soares");
    $conta1->definirCPF("123.456.789-10");
    $conta1->depositar(200);

    var_dump($conta1);

    // A prática de definir getters e setters para as caracterísicas da nossa classe não é uma boa prática.

    