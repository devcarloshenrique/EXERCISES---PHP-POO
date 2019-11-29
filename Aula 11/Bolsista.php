<?php 
	require_once 'Aluno.php';
	class Bolsista extends Aluno{
		private $bolsa;
		public function renovarBolsa(){
			echo "</p>Bolsa Renovada</p>";
		}
	//Sobrepondo um metodo de aluno == Polimorfismo.
	public function pagarMensalidade(){
		echo "<p>{$this->getNome()} é bolsista então paga com disconto</p>";
	}
}
 ?>