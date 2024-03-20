/**
 * Escrever um algoritmo que receba como entrada em uma variavel o valor de uma venda
 * e calcule a comissao do vendedor de 5%, mais os possíveis descontos de 5, 10, 15, 25%,
 * para compras a vista.
 * Tendo como opçoes de pagamentos dinheiro, cartao de credito, parcelado no crediario, cartao de debito, pix.
 */

$valor_venda = 1000;
$tipo_pagamento = "cartao";

$compras_a_vista = [
    "dinheiro",
    "pix"
];

$a_vista = in_array($tipo_pagamento, $compras_a_vista);

$valorFinal = 0;
$desconto = 0;
$valor_comissao = $valor_venda - ($valor_venda * 5/100);

if ($a_vista) {

    if ($valor >= 1000) {

        $desconto = $valor_venda - ($valor_venda * 25/100);

    } else if ($valor < 1000 && $valor > 800) {

        $desconto = $valor_venda - ($valor_venda * 15/100);

    } else if ($valor < 1000 && $valor > 800) {

        $desconto = $valor_venda - ($valor_venda * 10/100);

    } else {

        $desconto = $valor_venda - ($valor_venda * 5/100);

    }

    $total_descontos = $valor_comissao + $desconto;

} else {
    $total_descontos = $valor_comissao;
}

$valorFinal = $valor_venda - $total_descontos;

echo $valor_venda;
