<?php 
	class Pessoa{
		private $nome;
		private $idade;
		private $sexo;

		//Metodos Construtores
		public function __construct($n,$i,$s){
			$this->nome = $n;
			$this->idade = $i;
			$this->sexo = $s;
		}

		//Metodos Aceptores ou acessores
		
		public function getNome(){
			return $this->nome;
		}
		private function getIdade(){
			return $this->idade;
		}
		private function getSexo(){
			return $this->sexo;
		}

		//Metodos Modificadores ou mutantes

		private function setNome($n){
			$this->nome = $n;
		}
		private function setIdade($i){
			$this->idade = $i;
		}
		private function setSexo($s){
			$this->sexo = $s;
		}

		public function fazerAniversario(){
			$this->setIdade($this->getIdade() + 1);
			echo "<p> Parabéns {$this->getNome()} hoje você faz {$this->getIdade()}</p>";
		}
	}
 ?>