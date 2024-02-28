<?php
/*
Escreva um programa que imprima uma tabuada
de um numero fornecido pelo usuario
*/

// informado pelo usuario.
$num= 4;

$tabuada = "";
$i=0;
while ($i <= 10) {
    $tabuada = $num * $i;

    if ($i == 10) {
        echo "{$num} x {$i} = {$tabuada}\n";
    } else {
        echo "{$num} x {$i} = {$tabuada},\n";
    }

    $i++;
}
