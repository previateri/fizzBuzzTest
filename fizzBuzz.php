<?php

class FizzBuzz{

	private $NumeroInicial;
	private $NumeroFinal;
	private $Multiplicador;
	
	public function __construct(int $Inicial, int $Final, array $Multiplicador){
		$this->setValues($Inicial, $Final, $Multiplicador);
		$this->execute();
	}
	
	private function setValues($Inicial, $Final, $Multiplicador){
		$this->NumeroInicial 			= (int)	$Inicial;
		$this->NumeroFinal 				= (int)	$Final;
		$this->Multiplicador['fizz'] 	= (int)	$Multiplicador[0];
		$this->Multiplicador['buzz'] 	= (int)	$Multiplicador[1];
	}
	
	private function isMat(int $ValueA){
		$multiplicadores = count($this->Multiplicador);
		$result = $ValueA;
		$flagF = false;
		$flagB = false;
		if ($ValueA % $this->Multiplicador['fizz'] == 0){
			$result = 'f';
			$flagF = true;
		};
		if ($ValueA % $this->Multiplicador['buzz'] == 0){
			$result = 'b';
			$flagB = true;
		};
		if ($flagF && $flagB){
			$result = 'fb';
		};
		
		return $result;
	}
		
	private function write($Value, $Result){
		if($Result == 'f'){
			echo 'fizz';
		}elseif($Result == 'b'){
			echo 'buzz';
		}elseif($Result == 'fb'){
			echo 'fizzbuzz';
		}else{
			echo $Result;
		}
		echo "\n";
	}
	
	private function execute(){
		for ($i = $this->NumeroInicial; $i <= $this->NumeroFinal; $i++){
			$this->write($i, $this->isMat($i));
		}	
	}
}

$teste = new FizzBuzz(1,100,[3,5]);