<?php
/**
 * Desenvolver um sistema de conta bancaria utilizando classe
 * e as operacoes bancarias: saque, deposito, transferencia.
 * utilizando heranca caso necessario, e se preciso for mais uma classe.
 * Dica: se for utilizar mais de uma classe/objeto
 * ContaBancaria (coisas incomum) e Bradesco, BB, Caixa...
 */

class Banco {

}

class ContaBancaria {
    public $saldo;

    public function saque($valor = 0) {
        // implementar a logica para o saque
        $this->saldo = $this->saldo - $valor;
    }    
}

class BB extends ContaBancaria {
    public $conta;
    public $agencia;
    public $titular;

    public function getInfoConta() {
        echo "Titular: {$this->titular}
            Agencia: {$this->agencia}
            CC: {$this->conta}
            \n
            saldo: {$this->saldo}";
    }
}

$banco = new BB();
$banco->
$banco->saque(20);

