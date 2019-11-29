<?php
	require_once 'Mamifero.php';
	class Canguru extends Mamifero{
		//Polimorfismo de Sobreposição
		public function locomover(){
			echo "<p>Saltando</p>";
		}

	}
 ?>