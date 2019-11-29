<?php 
	require_once 'Animal.php';
	class Peixe  extends Animal{
		private $corEscama;

		public function locomover(){
			echo "<p>Nadando</p";
		}
		public function alimentar(){
			echo "Comendo substância";
		}
		public function emitirSom(){
			echo "peixe não faz som";
		}
		public function soltarBolhas(){
			echo "<p>Solto uma bolha</p>";
		}
		public function getCorEscama(){
			return $this->corEscama;
		}
		public function setCorEscama($cs){
			$this->corEscama = $cs;
		}

	}
 ?>