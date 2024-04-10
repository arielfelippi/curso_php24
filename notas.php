<?php

// Obter as notas do valor abaixo:
// MMC 
// R$ 572
// Notas: 100, 50, 20, 10, 5, 2
// Saída esperada: 5 x 100, 1 x 50, 1 x 20, 1 x 2

/*
572 / 100 = 5 x 100 (500) = 572 - 500 = 72
72 /50 = 1 x 50 (50) = 72 -50 = 22
22 /20 = 1 x 20(20) = 22 - 20 = 2
2 / 2 = 1x 2 (2) = 2 - 2 = 0
____________________________
    $valor = $valor - 10;
    $valor -= 10;
    floor($valor / $nota); // 5 pega parte inteira de um decimal (5.72); 
*/

$valor = 572;
$notas = [100, 50, 20, 10, 5, 2, 1];
$qtdeNotas = [];

foreach ($notas as $nota) {

    if ($valor >= $nota) {
        $qtde = floor($valor / $nota); // 5
        $valor_descontar = $qtde * $nota; // 500
        $valor -= $valor_descontar; // 72
        $qtdeNotas[$nota] = $qtde; // [100 => 5, 50 => 1]
    }
}

foreach ($qtdeNotas as $nota => $qtde) {
    echo "Tem {$qtde} de notas de {$nota}<br>";
}
