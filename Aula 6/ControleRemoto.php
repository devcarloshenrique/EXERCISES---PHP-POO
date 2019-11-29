<?php 
	require_once 'Controlador.php';
	class ControleRemoto implements Controlador{
		private $volume;
		private $ligado;
		private $tocando;

		//Metodos Especiais

		function __construct(){
			$this->volume = 50;
			$this->ligado = false;
			$this->tocando = false;
		}
		//Metodos acessores
		private  function getVolume(){
			return $this->volume;
		}
		private  function getLigado(){
			return $this->ligado;
		}
		private  function getTocando(){
			return $this->tocando;
		}
		//Metodos Modificadores
		private  function setVolume($v){
			$this->volume = $v;
		}
		private  function setLigado($l){
			$this->ligado = $l;
		}
		private  function setTocando($t){
			$this->tocando = $t; 
		}
		//Metodos abstratos 
		public function ligar(){
			$this->setLigado(true);
		}
		public function desligar(){
			$this->setLigado(false);
		}
		public function abrirMenu(){
			echo "</br> Esta ligado?:". ($this->getLigado()?"SIM":"NÃO");
			echo "</br> Esta tocando?:". ($this->getTocando()?"SIM":"NÂO");
			echo "</br>Volume:".$this->getVolume();
			for($x = 0;$x <=$this->getVolume();$x++){
				echo "| ";
			}
			echo "</br>";
		}
		public function fecharMenu(){
			echo "Fechando Menu.....";
		}
		public function maisVolume(){
			if ($this->getLigado() == true && $this->getVolume() >= 5) {
				$this->setVolume($this->getVolume() + 5);
			}
		}
		public function menosVolume(){
			if ($this->getLigado() == true) {
				$this->setVolume($this->getVolume() - 5);
			}
		}
		public function ligarMudo(){
			if ($this->getLigado() == true && $this->getVolume()>=0) {
				$this->setVolume(0);
			}
		}
		public function desligarMudo(){
			if($this->getLigado() == true && $this->getVolume() == 0){
				$this->setVolume(50);
			}
		}
		public function play(){
			if ($this->getLigado() == true && !($this->getTocando())) {
				$this->setTocando(true);
			}
		}
		public function pause(){
			if($this->getLigado() == true && $this->getTocando() == true){
				$this->setTocando(false);
			}

		}
	}

 ?>