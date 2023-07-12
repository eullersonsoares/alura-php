<?php

$idade = 16;
$nPessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;
echo "ou à partir de 16 anos acompanhado!\n";

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar!\n";
} elseif($idade >= 16 and $nPessoas > 1) {
    echo "Você tem $idade anos. E está acompanhado. Pode entrar!\n";
} elseif($idade >= 16 and $nPessoas < 2 ) {
    echo "Você tem $idade anos, mas não está acompanhado. Você não pode entrar!\n";
} else {
    echo "Você só tem $idade anos. Você não pode entrar!" . PHP_EOL;
}