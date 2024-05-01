<?php

class Exercicios {

	public $primos = [];

	/*
		Calcular os 5 primeiros numeros primos.
		Saída esperada: 2, 3, 5, 7, 11.
		Regra: só é divisivel por 1 e por ele mesmo.
		Ex.: 7 => 7/1 e 7/7.
		Dica: Utilizar o operador de módulo % para pegar o resto da divisão.
	*/
	function Primos() {
		$this->primos = [];

		for($numero = 2; count($this->primos) < 5; $numero++) {
			$isPrimo = true;

			for($divisor = 2; $divisor < $numero; $divisor++) {
				$resto = $numero % $divisor;

				if ($resto == 0) {
					$isPrimo = false;
					break;
				}
			}

			if ($isPrimo) {
				$this->primos[] = $numero;
			}
		}

		echo "Os números primos são: <br>";

		for($i = 0; $i < count($this->primos); $i++) {
			echo $this->primos[$i] . " " ;
		}
	}

	/*
		Escreva um programa que imprima uma tabuada
		de um numero fornecido pelo usuario
	*/
	public function tabuada($num = 4) {

		$tabuada = "";
		$i=0;
		while ($i <= 10) {
			$tabuada = $num * $i;

			// if ($i == 10) {
			//     echo "{$num} x {$i} = {$tabuada}\n";
			// } else {
			//     echo "{$num} x {$i} = {$tabuada},\n";
			// }

			echo "{$num} x {$i} = {$tabuada},\n";
			$i++;
		}
	}

	public function temperatura($temp = 16, $tipoTemperatura = 'c') {
		/*
			$c = celsius
			$k = kelvin
			$f = farenheit
		*/

		if ($tipoTemperatura == 'c')  {
			$f = $temp * 1.8 + 32;
			$k = $temp + 273;
			// echo "A temperatura em farenheit é: {$f} e, a temperatura em Kelvin é: {$k}." ;
		} else if ($tipoTemperatura == 'f')  {
			$c = $temp * 1.8 - 32;
			$k = $temp + 273;
			echo "A temperatura em farenheit é: {$c} e, a temperatura em Kelvin é: {$k}." ;
		} else if ($tipoTemperatura == 'k')  {
			$f = $temp * 1.8 + 32;
			$c = $temp + 273;
			echo "A temperatura em farenheit é: {$f} e, a temperatura em Kelvin é: {$c}." ;
		}
	}

	public function numerosPerfeitos()
	{
		/*
			Calcular os 4 primeiros numeros perfeitos.
			Saída esperada: 6, 28, 496, 8128.
			Regra: São aqueles cujos divisores somados (excluindo o próprio número)
			são iguais a eles mesmos.
			Ex.:
			6 = 1 + 2 + 3
			28 = 1 + 2 + 4 + 7 + 14
			496 = 1 + 2 + 4 + 8 + 16 + 31 + 62 + 124 + 248
			8128 = ?
		*/


		$perfeitos = [];

		for($numero = 2; count($perfeitos) < 4; $numero++) {
			$soma = 0;

			for($divisor = 1; $divisor < $numero; $divisor++) {
				$resto = $numero % $divisor;

				if ($resto == 0) {
					$soma += $divisor;
				}

				if ($soma > $numero) {
					break;
				}
			}

			if ($soma == $numero) {
				$perfeitos[] = $numero;
			}
		}

		echo "Os números perfeitso são: <br>";

		for($i = 0; $i < count($perfeitos); $i++) {
			echo $perfeitos[$i] . " " ;
		}
	}

	/*
		calcular o IMC
	*/
	function calcularIMC($peso = 90, $altura = 1.88, )
	{
		$imc = $peso / ($altura * $altura);

		$imc = round($imc, 2);

		if ($imc <= 18){
			echo "O seu IMC é: {$imc} e é considerado magreza";
		}
		else if ($imc > 18 && $imc <= 25) {
			// normal
		}
		else if ($imc > 25 && $imc <= 30) {
			// sobrepeso
		}
		else if ($imc > 30 && $imc <= 40) {
			// obesidade
		}
	}

	function __toString()
	{
		return $this->Primos() ?? '';
	}
}

$objExercicios = new Exercicios();

echo $objExercicios->Primos();
// echo $objExercicios->primos;
// echo $objExercicios;
