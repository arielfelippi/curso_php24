<?php

/**
 * Parte do Governo
 * Para ambos exercicios abaixo, considerar o desconto do INSS/FGTS de 11%.
 * R$: 1.412,00
 */

 const INSS_FGTS = 11; // constante
 $tipo_empregado= "gerente";


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

 if ( $tipo_empregado == "gerente") {
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
    * 10% - empregado normal
    * 12% - supervisor
    * 14% - gerente
    * 16% diretor
 */

$percentuais = [10, 12, 14, 16];
$empregados = ["empregado normal", "supervisor", "gerente", "diretor"];
$salariosFinal = [];

$salarioBase = 1412.00;

for ($i=0; $i < count($percentuais); $i++) {

    // concede o aumento
    $percentual =  $percentuais[$i] /100;
    $aumento = $salario * $percentual;
    $salario_com_aumento = $salario + $aumento;
    // fim

    // desconto governo
    $salario_final = $salario_com_aumento - ($salario_com_aumento * INSS_FGTS /100);
    //fim

    // $salariosFinal[$i] = $salario_final;
    $salariosFinal[] = $salario_final;
}


for ($i=0; $i < count($empregados); $i++) {
    $funcionario = $empregados[$i];

    $novoSalario = round($salariosFinal[$i], 2);

    echo "O salário do <b>{$funcionario}</b> que era: {$salario}. Passou a ser: {$novoSalario}.<br>";
}

