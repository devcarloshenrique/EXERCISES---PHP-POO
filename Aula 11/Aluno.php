<?php 
	require_once 'Pessoa.php';
	//Esse final define que essa class não vai ser permitida ter nenhuma sub-class.
	/*final*/ class Aluno extends Pessoa{
		private $matricula;
		private $curso;
//Caso eu utilize esse final, ele não vai deixar o metodo ser sobreposto
		public /*final*/ function pagarMensalidade(){
			echo "<p>Pagando Mensalidade do aluno {$this->getNome()}</p>";
		}
		public function getMatricula(){
			return $this->matricula;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function setMatricula($m){
			$this->matricula = $m;
		}
		public function setCurso($c){
			$this->curso = $c;
		}
	}
 ?>