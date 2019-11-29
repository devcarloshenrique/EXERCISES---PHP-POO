<?php 
	
	/*OBS: Só está dando erro por que os atributos não estão publicos*/
	class Caneta {
		public  $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		private function rabiscar(){
			if ($this->tampada == true) {
			echo "<p>Erro</p>";
			}else{
			echo "<p>Rabiscando</p>";
			}
		}

		private function tampar(){
			$this->tampada = true;

		}

		 private function destampar(){
			$this->tampada = false;
		}


	}

 ?>