<?php
/**
 * Desenvolver um sistema de conta bancaria utilizando classe
 * e as operacoes bancarias: saque, deposito, transferencia.
 * utilizando heranca caso necessario, e se preciso for mais uma classe.
 * Dica: se for utilizar mais de uma classe/objeto
 * ContaBancaria (coisas incomum) e Bradesco, BB, Caixa...
 */

 class ContaBancaria {
    public $agencia = '00000';
    public $conta = '000000-00';
    public $titular = '????';
    public $saldo = 0;

    public $agenciaDestinatario = '00000';
    public $contaDestinatario = '000000-00';
    public $titularDestinatario = '????';

    public function saque($valor = 0) {
        // implementar a logica para o saque
        $this->saldo = $this->saldo - $valor;
    }    
    
    public function transferencia($valor = 0) {
        // implementar a logica para o saque
        $this->saldo = $this->saldo - $valor;
        
        $conta = $this->getInfoConta();
        $contaDestinatario = $this->getInfoContaDestinatario();
        
        $msgTransferencia = "*** TRANSFERÊNCIA *** \n";
        $msgTransferencia .= $conta;
        $msgTransferencia .= $contaDestinatario;
        $msgTransferencia .= "Valor a ser transferido R$: {$valor} \n";
        $msgTransferencia .= "O saldo atual ficou R$: {$this->saldo}";
        
        echo $msgTransferencia;
    }    

    public function exibirSaldo() {
        echo "O saldo atual é R$: {$this->saldo}\n";
    }
    
    public function getInfoConta() {
        echo " Titular: {$this->titular} \n Agencia: {$this->agencia} \n CC: {$this->conta}\n";
    }
    
    public function getInfoContaDestinatario() {
        echo " Destinatario: {$this->titularDestinatario} \n Agencia: {$this->agenciaDestinatario} \n CC: {$this->contaDestinatario}\n";
    }
}

class Bradesco extends ContaBancaria {
   
    public function setConta($titular, $agencia, $conta) {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
    }

    public function setContaDestinatario($titular, $agencia, $conta) {
        $this->titularDestinatario = $titular;
        $this->agenciaDestinatario = $agencia;
        $this->contaDestinatario = $conta;
    }
}

$banco = new Bradesco();
$banco->setConta('Marcos Carraro', '6789-1', '9876543-21');
$banco->setContaDestinatario('Ariel Felippi', '1234-5', '1234567-89');
//$banco->getInfoConta();
//$banco->getInfoContaDestinatario();
//$banco->exibirSaldo();
$banco->transferencia(200);
