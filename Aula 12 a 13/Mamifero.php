<?php 
	require_once 'Animal.php';
	class Mamifero extends Animal {
		private $corPelo;


		public function locomover(){
			echo "<p>Correndo</p>";
		}
		public function alimentar(){
			echo "Mamando";
		}
		public function emitirSom(){
			echo "Som de Mamifero";
		}
		public function getCorPelo(){
			return $this->corPelo;
		}
		public function setCorPelo($cp){
			$this->corPelo = $cp;
		}
	}

 ?>