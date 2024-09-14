<?php

//variavel
/*$variable = "Essa é uma variável\n";

echo $variable;

$variable = 2540;
echo $variable;*/

//toda função possui parâmetros
function sum($a, $b){
    return $a + $b;
}

echo sum(45, 45);
echo PHP_EOL; //Serve para pular linha


$subtraction = fn (int $a, int $b) => $a - $b; //arrow function (a arrow function necessita de " => "), serve para abreviar uma função com return

echo $subtraction (45, 30);
var_dump($subtraction);

