<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		 require_once 'Aluno.php';
		 require_once 'Professor.php';
		 require_once 'Funcionario.php';
		 require_once 'Pessoa.php';

		 $p1 = new Pessoa();
		 $p2 = new Aluno();
		 $p3 = new Professor();
		 $p4 = new Funcionario();

		 $p1->setNome('Pedro');
		 $p2->setNome('Maria');
		 $p3->setNome('Cláudio');
		 $p4->setNome('Faniana');

		 $p2->setCurso('Informatica');
		 $p3->setSalario(2500.75);
		 $p4->setSetor('Estoque');

		 $p1->setSexo('M');
		 $p4->setSexo('F');

		 $p3->receberAumento(550.20);
		 $p4->mudarTrabalho();
		 
		 print_r($p1);
		 print_r($p2);
		 print_r($p3);
		 print_r($p4);




	 ?>
</body>
</html>