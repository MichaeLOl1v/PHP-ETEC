<?php 

	# carrega a classe 
	include_once 'Funcionario.php';

	//instancia novo Funcionario
	$pedro = new Funcionario();

	//atribui novo salário
	$pedro->setCodigo();
	$pedro->setNome();
	$pedro->setNascimento();
	$pedro->setSalario();
	

	//obtem salário

	echo 'Código: ' .$pedro->getCodigo();
	echo 'Nome: ' .$pedro->getNome();
	echo 'Nascimento: ' .$pedro->getNascimento();
	echo 'Salário: R$ ' .$pedro->getSalario();

 ?>