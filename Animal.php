<?php

// Criar uma ou mais classe/objeto que represente os seguintes animais
// - gato
// - cachorro
// - papagaio
// Utilizando o conceito de heranca (extends).

class Animal {
    public $tipo;
    public $nome;
    public $idade;

    public function __construct($tipo, $nome, $idade)
    {
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getInfo() {
        echo "{$this->tipo}: {$this->nome}, {$this->idade}";
    }

    public function emitirSom() {
        echo "Som de algum animal";
    }
}

class Gato extends Animal{

    public function emitirSom() {
        echo "Som de Miado!";
    }
}

class Cachorro extends Animal{
    public function emitirSom() {
        echo "Som de Latido!";
    }
}

class Papagaio extends Animal{
    public function emitirSom() {
        echo "Som de Pia ou Fala!";
    }
}

$animalGato = new Gato('gato', 'Mimi', 7);
$animalGato->getInfo();

echo "\n"; // "<br>"

$animalCachorro = new Cachorro('cachorro', 'Rex', 5);
$animalCachorro->getInfo();

echo "\n"; // "<br>"

$animalPapagaio = new Papagaio('papagaio', 'Loro', 2);
$animalPapagaio->getInfo();
