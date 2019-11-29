<?php 
	require_once 'Lutador.php';
	class Luta {
		//Atributos
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;
		
		//Metodos publicos

		public function getDesafiado(){
			return $this->desafiado;
		} 
		public function getDesafiante(){
			return $this->desafiante;
		}
		public function getRounds(){
			return $this->rounds;
		}
		public function getAprovada(){
			return $this->aprovada;
		}
		public function setDesafiado($d){
			$this->desafiado = $d;
		}
		public function setDesafiante($d){
			$this->desafiante = $d;
		}
		public function setRounds($r){
			$this->rounds = $r;
		}
		public function setAprovada($a){
			$this->aprovada = $a;
		}

		public function marcarLuta($l1,$l2){
			if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)){
				$this->aprovada = true;
				$this->desafiado = $l1;
				$this->desafiante = $l2;	
			}else{
				$this->aprovada = false;
				$this->desafiado = null;
				$this->desafiante = null;
				echo "</br>Luta não pode acontecer</br>";
			}
		}
		public function lutar(){
				if ($this->aprovada) {
					$this->desafiado->apresentar();
					$this->desafiante->apresentar();
					$vencedor = rand(0,2);
					switch($vencedor){
						case 0: // empate
						echo "<p>---- Empate!! ----</p>";
						$this->desafiado->empatarLuta();
						$this->desafiante->empatarLuta();
							break;
						case 1: //Desafiado vence
						echo "<p>---- Vitoria do Desafiado: {$this->desafiado->getNome()} ----</p>";
						$this->desafiado->ganharLuta();
						$this->desafiante->perderLuta();
							break;
						case 2: // Desafiante vence
						echo "<p>---- Vitoria do Desafiante: {$this->desafiante->getNome()} ----</p>";
						$this->desafiado->perderLuta();
						$this->desafiante->ganharLuta();

							break;
					}

				}else{
					echo "<p>Luta não pode acontecer</p>";
				}
		}

	}
 ?>