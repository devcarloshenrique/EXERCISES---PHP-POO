<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		require_once 'Caneta.php';

		$c1 = new Caneta("Bic","Azul",0.5);
		
		//$c1->setModelo("BIC");
		//$c1->setPonta(0.5);
		print_r($c1);

		// echo "Eu tenho uma cante {$c1->getModelo()} da ponta {$c1->getPonta()}";;
	 ?>



</body>
</html>