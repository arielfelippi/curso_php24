<?php

/*
    Calcular os 5 primeiros numeros primos.
    Saída esperada: 2, 3, 5, 7, 11.
    Regra: só é divisivel por 1 e por ele mesmo.
    Ex.: 7 => 7/1 e 7/7.
    Dica: Utilizar o operador de módulo % para pegar o resto da divisão.
*/

$primos = [];

for($numero = 2; count($primos) < 5; $numero++) {
    $isPrimo = true;

    for($divisor = 2; $divisor < $numero; $divisor++) {
        $resto = $numero % $divisor;

        if ($resto == 0) {
            $isPrimo = false;
            break;
        }
    }

    if ($isPrimo) {
        $primos[] = $numero;
    }
}

echo "Os números primos são: <br>";

for($i = 0; $i < count($primos); $i++) {
    echo $primos[$i] . " " ;
}
