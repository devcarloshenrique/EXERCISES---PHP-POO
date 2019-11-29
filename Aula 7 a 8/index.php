<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php 
		require_once 'Lutador.php';
		require_once 'Luta.php';
			$l = array();

			$l[0] = new Lutador('Petty Boy','França',1.75,51,31);
			$l[1] = new Lutador('Putscript','Brasil',1.68,70,29);
			$l[2] = new Lutador('Snapshadow','EUA','1.65','80.9','35');
			$l[3] = new Lutador('Dead Code','Austrália','1.93','81.6','28');
			$l[4] = new Lutador('Ufocobol','Brasil','1.81','105.7','30');

			$lu = new Luta();
					$lu->marcarLuta($l[0],$l[1]);
					$lu->Lutar();

		$l[0]->status();
		echo "</br>";
		$l[1]->status();




	

	 ?>
	</pre>
</body>
</html>