<?php 
	//Class abstrata não pode virar objeto, só pode ser utilizada para herança
	abstract class Pessoa{
		private $nome; 
		private $idade;
		private $sexo;

		public final function fazerAniversario(){
			$this->idade ++;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setNome($n){
			$this->nome = $n;
		}
		public function setIdade($i){
			$this->idade = $i;
		}
		public function setSexo($s){
			$this->sexo = $s;
		}


	}


 ?>