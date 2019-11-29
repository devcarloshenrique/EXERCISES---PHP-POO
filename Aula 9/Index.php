<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php 
		require_once 'Pessoa.php';
		require_once 'Livro.php';
		$p = array();
		$p[0] = new Pessoa('Carlos','19','M');
		$p[1] = new Pessoa('Robson','21','M');

		// print_r($p);

		$l = new Livro('Capitalismo Para iniciantes',$p[0],'500',$p[1]);
		
		$l->avancarPag();
		$l->voltarPag();
		$l->detalhes();
		$l->abrir();
		$l->folhear();
		




	 ?>
	 </pre>
</body>
</html>
