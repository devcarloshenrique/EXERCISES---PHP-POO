<?php 
	require_once 'Controler.php';
	class Lutador implements Controler{
		//Atributos
		private $nome;
		private $nacionalidade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;
		private $idade;

		//Metodos Especiais
		function Lutador($no,$na,$al,$p,$id){
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->altura = $al;
			$this->peso = $p . "KG";
			$this->vitorias = 0;
			$this->derrotas = 0;
			$this->empates = 0;
			$this->idade = $id;
			$this->setCategoria();
		}

		//Metodos aceptores
		public function getNome(){
			return $this->nome; 
		}
		private function getNacionalidade(){
			return $this->nacionalidade;
		}
		private function getIdade() {
			return $this->idade;
		}
		private function getAltura(){
			return $this->altura;
		}
		private function getPeso(){
			return $this->peso;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		private function getVitorias(){
			return $this->vitorias;
		}
		private function getDerrotas(){
			return $this->derrotas;
		}
		private function getEmpates(){
			return $this->empates;
		}
		//Metodos modificadores
		private function setNome($n){
			$this->nome = $n;
		}
		private function setNacionalidade($n){
			$this->nacionalidade = $n;
		}
		private function setIdade($i){
			$this->idade = $i;
		}
		private function setAltura($a){
			$this->altura = $a;
		}
		private function setPeso($p){
			$this->peso = $p;
			$this->setCategoria();

		}
		private function setCategoria(){
			if ($this->peso <= 50) {
				$this->categoria = 'Peso Leve';
			}
			if ($this->peso >=51 && $this->getPeso() <= 100) {
				$this->categoria = 'Peso Médio ';
			}
			if ($this->peso >= 100){
				$this->categoria = 'Peso Pesado';
			}
		}
		private function setVitorias($v){
			$this->vitorias = $v;
		}
		private function setDerrotas($d){
			$this->derrotas = $d;
		}
		private function setEmpates($e){
			$this->empates = $e;
		}

		public function apresentar(){

			echo "</br>Nome: {$this->getNome()}";
			echo "</br>Nacionalidade: {$this->getNacionalidade()}";
			echo "</br>Idade: {$this->getIdade()}";
			echo "</br>Altura: {$this->getAltura()}";
			echo "</br>Peso: {$this->getPeso()}";
			echo "</br>Categoria: {$this->getCategoria()}";
			echo "<p>----------------------------------";

			
		}
		public function status(){
				echo "</br>Vitorias: {$this->getVitorias()}";
				echo "</br>Derrotas: {$this->getDerrotas()}";
				echo "</br>Empates: {$this->getEmpates()}";
			
		}
		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() + 1);
		}
		public function perderLuta(){
			$this->setDerrotas($this->getDerrotas() + 1);
		}
		public function empatarLuta(){
			$this->setEmpates($this->getEmpates() + 1);

		}

	}

 ?>