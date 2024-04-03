<?php

/**
 * Escrever um algoritmo que receba como entrada em uma variavel o valor de uma venda
 * e calcule a comissao do vendedor de 5%, mais os possíveis descontos de 5, 10, 15, 25%,
 * para compras a vista.
 * Tendo como opçoes de pagamentos dinheiro, cartao de credito, parcelado no crediario, cartao de debito, pix.
 */

$valor_venda = 1000;
$tipo_pagamento = "pix";

$compras_a_vista = [
    "dinheiro",
    "pix"
];

$a_vista = in_array($tipo_pagamento, $compras_a_vista);

$valorFinal = 0;
$desconto = 0;
$valor_comissao = desconto($valor_venda, 5);

function porcentagem($percent) {
    $percentual = ($percent / 100);

    return $percentual;
}

function desconto($valor, $percent) {
    $resultado = $valor * porcentagem($percent);

    return $resultado;
}

$total_descontos = $valor_comissao;

if ($a_vista) {

    if ($valor_venda>= 1000) {

        $desconto = desconto($valor_venda, 25);

    } else if ($valor_venda< 1000 && $valor_venda> 800) {

        $desconto = desconto($valor_venda, 15);

    } else if ($valor_venda< 1000 && $valor_venda> 800) {

        $desconto = desconto($valor_venda, 10);

    } else {

        $desconto = desconto($valor_venda, 5);

    }

    $total_descontos = $valor_comissao + $desconto;

} 

$valorFinal = $valor_venda - $total_descontos;

echo $valorFinal;
 