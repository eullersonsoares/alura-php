<?php 

$dados = [
    'nome' => 'Zé', 
    'nota' => 10, 
    'idade' =>23
];

extract($dados); //cria diversas variáveis à partir de um array (não usar em dados não confiáveis ou que não foram tratados)
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));