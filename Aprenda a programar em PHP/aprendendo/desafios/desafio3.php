<?php 

//Desafio do IMC:

$altura = 1.74;
$peso = 80;

//Fórmula:
$IMC = $peso/($altura**2);

echo "O seu índice de massa corporal é igual a: $IMC" . PHP_EOL;

if($IMC >= 40) {
    echo "Obesidade III (mórbida)" . PHP_EOL;
} elseif($IMC > 35) {
    echo "Obesidade II (severa)";
} elseif($IMC > 35) {
    echo "Obesidade II (severa)";
} elseif($IMC > 30) {
    echo "Obesidade I";
} elseif($IMC > 25) {
    echo "Peso normal";
} elseif($IMC > 18) {
    echo "Peso normal";
} elseif($IMC > 17) {
    echo "Abaixo do peso";
} else {
    echo "Muito abaixo do peso";
}
