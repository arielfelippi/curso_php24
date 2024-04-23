<?php

/*
    Calcular os 4 primeiros numeros perfeitos.
    Saída esperada: 6, 28, 496, 8128.
    Regra: São aqueles cujos divisores somados (excluindo o próprio número)
    são iguais a eles mesmos.
    Ex.:
    6 = 1 + 2 + 3
    28 = 1 + 2 + 4 + 7 + 14
    496 = 1 + 2 + 4 + 8 + 16 + 31 + 62 + 124 + 248
    8128 = ?
*/


$perfeitos = [];

for($numero = 2; count($perfeitos) < 4; $numero++) {
    $soma = 0;

    for($divisor = 1; $divisor < $numero; $divisor++) {
        $resto = $numero % $divisor;

        if ($resto == 0) {
            $soma += $divisor;
        }

        if ($soma > $numero) {
            break;
        }
    }

    if ($soma == $numero) {
        $perfeitos[] = $numero;
    }
}

echo "Os números perfeitso são: <br>";

for($i = 0; $i < count($perfeitos); $i++) {
    echo $perfeitos[$i] . " " ;
}
