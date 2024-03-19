<?php

/**
 * Parte do Governo
 * Para ambos exercicios abaixo, considerar o desconto do INSS/FGTS de 11%.
 * R$: 1.412,00
 */

 const INSS_FGTS = 11; // constante
 $cargo_empregado= "gerente";


/**
 * Parte da Empresa:
 * Implementar um algoritmo que conceda um aumento de 10% ao empregado
 */
$salario = 1412.00;
$salario_final = 0;
$aumento_percentual = 10;

$salario_final = $salario + ($salario * $aumento_percentual /100); // da o aumento 10% 1553,20
$salario_final = $salario_final - ($salario_final * INSS_FGTS /100); // desconta 1553,20 - 11% = 1382,35
$salario_final = round($salario_final, 2);

// echo "O Sálario final do empregado é: {$salario_final}.<br>";



/**
 * Parte da Empresa:
 * Reaproveitar o primeiro algoritmo(acima) e conceder o aumento conforme o cargo
 * 10% - empregado normal
 * 12% - supervisor
 * 14% - gerente
 * 16% diretor
 */

 if ( $cargo_empregado == "gerente") {
    $aumento_percentual = 14;

    // calculando o aumento
    $percentual =  $aumento_percentual /100; // 0,14
    $aumento = $salario * $percentual; // 197,68
    $salario_com_aumento = $salario + $aumento; // 1609,68

    // desconto INSS_FGTS (governo)
    $salario_final = $salario_com_aumento - ($salario_com_aumento * INSS_FGTS /100);

    $salario_final = round($salario_final, 2); // 1432,62

    // echo "O novo Sálario da gerencia é: {$salario_final}.<br>";
 }


 /* EXEMPLO COM ARRAY || VETOR.
    * 10% - empregado
    * 12% - supervisor
    * 14% - gerente
    * 16% - diretor
 */

$cargo_empregado = "";
$salario_com_aumento = [];
$percentuais = [10, 12, 14, 16];
$cargos = ["empregado", "supervisor", "gerente", "diretor"];

$tamanhoArray = count($cargos);

$salario = 1412.00;

// Concede aumento de acordo com o cargo e o percentual.
for ($i = 0; $i < $tamanhoArray; $i++ ) {

    $cargo_empregado = $cargos[$i]; // supervisor, gerente...
    $aumento_percentual = $percentuais[$i]; // 12, 14...

    $percentual =  $aumento_percentual /100; // 0,14
    $aumento = $salario * $percentual; // 140,00

    $salario_com_aumento[] = $salario + $aumento; // 1572.00
}

$salario_final = [];
$desconto_salarial = [];

// Efetuar o desconto do INSS_FGTS(governo)
for ($i = 0; $i < $tamanhoArray; $i++ ) {

    $percentual =  INSS_FGTS /100; // 0,11
    $desconto = $salario_com_aumento[$i] * $percentual;

    $desconto_salarial[] = round($desconto, 2);

    $salario_com_desconto = $salario_com_aumento[$i] - $desconto;
    $salario_final[] = round($salario_com_desconto, 2);
}


// Exibe todos os salarios atualizados
for ($i = 0; $i < $tamanhoArray; $i++ ) {
    $funcionario = $cargos[$i]; // supervisor, gerente...
    $novo_salario = $salario_final[$i];// o salario de cada um conforme itera o laco FOR.

    $salario = $salario_com_aumento[$i];

    $desconto = $desconto_salarial[$i];

    echo "O funcionário <b>{$funcionario}</b><br> - teve seu salário atualizado para: <b>R$ {$salario}</b> e seu salário final é: <b>R$ {$novo_salario}</b> com o desconto de <b>INSS: R$ {$desconto}</b><br>";
    echo "<br><br>";
}


/**
 * Conceder o mesmo perncentual de aumento do diretor para o CTO
 */

$cargo_empregado = "";
$salario_com_aumento = [];
$percentuais = [10, 12, 14, 16];
$cargos = ["empregado", "supervisor", "gerente", "diretor", "CTO"];

$tamanhoArray = count($cargos);

$salario = 1412.00;

