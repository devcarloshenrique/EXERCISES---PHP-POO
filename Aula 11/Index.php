<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php 
		require_once 'Visitante.php';
		require_once 'Aluno.php';
		require_once 'Bolsista.php';
		/*$v1 = new Visitante();
		$v1->setNome('Carlos');
		print_r($v1);*/

		/*$v2 = new Aluno();
		$v2->setNome('Carlos');
		$v2->setMatricula('1231300');
		$v2->setCurso('Informática');
		$v2->setIdade('19');
		$v2->setSexo('M');
		$v2->pagarMensalidade();
		print_r($v2);*/

		$a1 = new Bolsista();
		$a1->setNome('Carlos');
		$a1->setMatricula('q1w2e3r4rt5');
		$a1->renovarBolsa();
		$a1->pagarMensalidade();
		print_r($a1);



	 ?>
	</pre>
</body>
</html>