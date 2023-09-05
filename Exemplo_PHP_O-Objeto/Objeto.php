<?php 

	# carrega as classes

	include_once 'Pessoa.php';
	include_once 'Conta.php';

	#criação do objeto $carlos

	$carlos = new Pessoa;
	$carlos->Codigo = 10;
	$carlos->Nome = "Carkis da Silva";
	$carlos->Altura = 1.85;
	$carlos->Idade = 25;
	$carlos->Nascimento = '10/04/1976';
	$carlos->Escolaridade = "Ensino Médio";

	echo "Manipulando o objeto $carlos->Nome :\n";
	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n";

	$carlos->Formar('Técnico em Eletricidade');
	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}";
	echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";

	$carlos->Envelhecer(1);
	echo "{$carlos->Nome} possui {$carlos->Idade} anos \n";


 ?>