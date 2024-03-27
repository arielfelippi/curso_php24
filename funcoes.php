<?php

// function soma($num, $num2) {
//     $resultado = $num + $num2;

//     return $resultado;
// }

// echo "Soma: " . soma(2, 2) . "<br>";


// function menos($num, $num2) {
//     $resultado = $num - $num2;

//     return $resultado;
// }

// echo "Menos: " . menos(2, 2) . "<br>";

// function vezes($num, $num2) {
//     $resultado = $num * $num2;

//     return $resultado;
// }

// echo "Vezes: " . vezes(2, 2) . "<br>";


// function dividir($num, $num2) {
//     $resultado = $num / $num2;

//     return $resultado;
// }

// echo "Dividir: " . dividir(2, 2) . "<br>";



function porcentagem($valor, $percentual) {
    $resultado = $valor * ($percentual / 100);

    return $resultado;
}

// echo "Porcentagem: " . porcentagem(30, 1) . "<br>";

function aumento($valor, $percent) {
    $resultado = $valor + porcentagem($valor, $percent); // aumento

    return $resultado;
}

function desconto($valor, $percent) {
    $resultado = $valor - porcentagem($valor, $percent); // desconto

    return $resultado;
}

function calcular_salario($salario, $aumento_percentual, $desconto_inss, $tipo_empregado) {

    $salario_final = aumento($salario, $aumento_percentual); // aumento
    $salario_final = desconto($salario_final, $desconto_inss); // desconto

    $salario_final = round($salario_final, 2);

    echo "<b>{$tipo_empregado}</b> com o salario: {$salario}" . " passou a ter o salario: " . $salario_final . "<br>";
}


/**
 * Parte da Empresa:
 * Reaproveitar o primeiro algoritmo(acima) e conceder o aumento conforme o cargo
 * 10% - empregado normal
 * 12% - supervisor
 * 14% - gerente
 * 16% diretorde inovacao
 * 20% diretor geral
 */

$salario = 1412.00;
$desconto_inss = 11;

$aumento_percentual = 10;
 $tipo_empregado = "Empregado normal";
calcular_salario($salario, $aumento_percentual, $desconto_inss, $tipo_empregado);

$aumento_percentual = 12;
$tipo_empregado = "Supervisor";
calcular_salario($salario, $aumento_percentual, $desconto_inss, $tipo_empregado);

$aumento_percentual = 14;
$tipo_empregado = "Gerente";
calcular_salario($salario, $aumento_percentual, $desconto_inss, $tipo_empregado);

$aumento_percentual = 16;
$tipo_empregado = "Diretor inovacao";
calcular_salario($salario, $aumento_percentual, $desconto_inss, $tipo_empregado);


$aumento_percentual = 20;
$tipo_empregado = "Diretor geral";
calcular_salario($salario, $aumento_percentual, $desconto_inss, $tipo_empregado);
