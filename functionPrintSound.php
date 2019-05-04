<?php
/**
 * Function printSound()
 * A função deve receber dois parâmetros. Sendo o primeiro um array contendo o número
 * desejado para o "som"  * e o "som" que deverá ser printado nesse número. O segundo parâmetro
 * deve ser o número máximo desejado para a contagem.
 */

 function printSound($arrSound, $maxCounter){
	for ($i = 1; $i <= $maxCounter; $i++) {
		$output = $i;
		foreach ($arrSound as $key => $sound) :
		if ( $i % $key == 0 ){
			$output = ($output == $i ? $sound : $output . $sound);
		}
		endforeach;
		
		echo $output . PHP_EOL;
	}
}

$arrSound = [ 3 => 'Fizz...', 
			  5 => 'Buzz...',
			  7 => 'Zazz!',
			];

printSound($arrSound, 21);