<?php 

	// insere a classe
	include_once 'Conta.php';

	// cria um objeto
	$valor1 = new Conta();

	// atribuir valores
	$valor1->NumAge = "1284635/0";
	$valor1->NumConta = 2012;
	$valor1->Nome = "Mike Oliv";
	$valor1->Saldo = "1.200,00";


	//imprimindo os valores
	$valor1->ImprimeEtiqueta();
	
 ?>