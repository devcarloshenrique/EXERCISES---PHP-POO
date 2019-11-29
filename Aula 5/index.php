<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<pre>
		<?php 
		require_once 'ContaBanco.php';
		$c1 = new ContaBanco();
	
		//Atributo
		$c1->setDono("Carlos Henrique");	
		$c1->setNumConta("1q2w3e4r5t");		
		//Metodo
		$c1->AbrirConta(); 
		echo "</br></br>";		
		$c1->Depositar(500);
		$c1->PagamentoMensal();
		echo "</br></br>";				
		print_r($c1);
		echo "</br></br>";	
		$c1->Sacar(488);
		$c1->FecharConta();
		echo "</br></br>";		
		print_r($c1);


		 ?>
		 </pre>
</body>
</html>


