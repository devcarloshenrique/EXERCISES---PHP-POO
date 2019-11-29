<?php 
	require_once 'Publicacao.php';
	class Livro implements Publicacao{
		private $titulo;
		private $autor;
		private $totalPag;
		private $pagAtual;
		private $aberto;
		private $leitor;

		public function __construct($t,$a,$p,$le){
			$this->titulo = $t;
			$this->autor = $a;
			$this->totalPag = $p;
			$this->pagAtual = 0;
			$this->aberto = "Fechado";
			$this->leitor = $le;
		}

		private function getTitulo(){
			return $this->titulo;
		}
		private function getAutor(){
			return $this->autor;
		}
		private function getTotalpag(){
			return $this->totalPag;
		}
		private function getPagatual(){
			return $this->pagAtual;
		}
		private function getAberto(){
			return $this->aberto;
		}
		private function getLeitor(){
			return $this->leitor;
		}
		private function setTitulo($t){
			$this->titulo = $t;
		}
		private function setAutor($a){
			$this->autor = $a;
		}
		private function setTotalpag($t){
			$this->totalPag = $t;
		}
		private function setPagatual($p){
			$this->pagAtual = $p;
		}
		private function setAberto($a){
			$this->aberto = $a;
		}
		private function setLeitor($l){
			$this->leitor = $l;
		}

		public function detalhes(){
			echo "<p>Nome do Livro: {$this->getTitulo()} <br>";
			echo "Autor: {$this->autor->getNome()} <br>";
			echo "Total de Paginas: {$this->getTotalpag()} <br>";
			echo "Pagina Atual: {$this->getPagatual()} <br>";
			echo "Aberto: {$this->getAberto()} <br>" ;
			echo "Leitor: {$this->leitor->getNome()} <br> </p>";

		}

		public function abrir(){
			$this->setAberto("<p>Livro aberto</p>");
		}
		public function fechar(){
			$this->setAberto("<p>Fechado</p>");
		}
		public function folhear(){
			if ($this->getAberto() == '<p>Livro aberto</p>') {
				echo "Lendo Livro";
			}else{
				echo "Não é possivel ler agora";
			}
		}
		public function avancarPag(){
			$this->setPagatual($this->getPagatual() + 1);
		}
		public function voltarPag(){
			$this->setPagatual($this->getPagatual() - 1);

		}


	}

 ?>