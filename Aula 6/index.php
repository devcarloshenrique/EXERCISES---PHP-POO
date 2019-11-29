<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<h1>Projeto Controle</h1>
		<pre>
	<?php 
		require_once 'ControleRemoto.php';
		$c = new ControleRemoto();

		$c->ligar();
		$c->abrirMenu();
	 ?>
	 	</pre>
</body>
</html>
