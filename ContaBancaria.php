<?php
/**
 * Desenvolver um sistema de conta bancaria utilizando classe
 * e as operacoes bancarias: saque, deposito, transferencia.
 * utilizando heranca caso necessario, e se preciso for mais uma classe.
 * Dica: se for utilizar mais de uma classe/objeto
 * ContaBancaria (coisas incomum) e Bradesco, BB, Caixa...
 */

 class ContaBancaria {
    public $saldo = 0;

    public function saque($valor = 0) {
        // implementar a logica para o saque
        $this->saldo = $this->saldo - $valor;
    }    

    public function exibirSaldo() {
        echo "O saldo atual é R$: {$this->saldo}\n";
    }
}

class BB extends ContaBancaria {
    public $agencia = '1234-5';
    public $conta = '1234567-89';
    public $titular = 'Ariel';

    public function getInfoConta() {
        echo " Titular: {$this->titular} \n Agencia: {$this->agencia} \n CC: {$this->conta}\n";
    }
}

$banco = new BB();
$banco->getInfoConta();
$banco->exibirSaldo();
$banco->saque(20);
