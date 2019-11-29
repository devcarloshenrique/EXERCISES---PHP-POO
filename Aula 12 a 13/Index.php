<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once 'Mamifero.php';
		require_once 'Reptil.php';
		require_once 'Peixe.php';
		require_once 'Ave.php';
		require_once 'Canguru.php';


		$m = new Mamifero();
		$a = new Ave();
		$r = new Reptil();
		$c = new Canguru	();

		$m->setPeso(33.3);
		$m->locomover();
		$a->locomover();
		$r->locomover();

		$c->locomover();



	 ?>
</body>
</html>