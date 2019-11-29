<?php 
	require_once 'Animal.php';
	class Ave extends Animal{
		private $corPena;

		public function locomover(){
			echo "<p>Voando</p>";
		}
		public function alimentar(){
			echo "Comendo Frutas";
		}
		public function emitirSom(){
			echo "Som de ave";
		}
		public function fazerNinho(){
			echo "Fazendo Ninho";
		}
		public function getCorPena(){
			return $this->corPena;
		}
		public function setCorPena($cp){
			$this->corPena = $cp;
		}
	}

 ?>