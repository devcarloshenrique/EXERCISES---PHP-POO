<?php 
	class ContaBanco{
		public $numConta;
		private $dono;
		private $saldo;
		private $status;

		public function __construct(){
			$this->status = false;
			$this->saldo = 0;
		}
		public function PagamentoMensal(){
			if ($this->status == true) {
				$this->saldo -= 12;
			echo "Foi realizado com sucesso o pagamento mensal". "</br>";
			echo "Saldo Atual:R$ " . $this->saldo . "</br>";

			}else{
				echo "Para realizar o pagamento mensal é necessário ter uma conta aberta </br>";
			}
		}
		public function AbrirConta(){
			$this->status = "Conta Ativa";
			echo "Conta Aberta com sucesso";
		}
		public function FecharConta(){
			if ($this->saldo == 0) {
				// $this->numConta = false;
				$this->dono = false;
				$this->status = "Conta Inexistente";
				echo "Conta Fechada". "</br>";
			}else if($this->saldo > 0){
				echo "Saque seus R$: ".$this->saldo." Para fechar sua conta.". "</br>";
			}else if($this->saldo < 0){
				echo "Fique com saldo positivo para fechar sua conta.". "</br>";
			}
		}
		public function Depositar($deposito){
			if ($this->status == true) {
				$this->saldo += $deposito; 
				echo "Deposito de R$ ".$deposito." Realizado com sucesso <br>";
			}else{
				echo "Abra um conta para realizar o deposito <br>";
			}
		}
		public function Sacar($valor){
			if ($this->saldo >= 1 || $valor <= $this->saldo) {
				$this->saldo -= $valor;
				echo "Saque de R$ " . $valor. " Realizado com sucesso</br>";
				echo "Saldo Atual:R$ " . $this->saldo . "</br>";

			}
		}



		public function getNumConta(){
			return $this->numConta;
		}
		public function setNumConta($nc){
			$this->numConta = $nc;
		}
		public function getDono(){
			return $this->getDono;
		}
		public function setDono($d){
			$this->dono = $d;
		}
		public function getSaldo(){
			return $this->saldo;
		}
		public function setSaldo($s){
			$this->saldo = $s;
		}
		public function getStatus(){
			return $this->status;
		}
		public function setStatus($s){
			if ($s == true) {
				$this->status = "Conta Ativa";
			}else{
				$this->status = "Conta Inexistente";
			}

		}



	}


 ?>