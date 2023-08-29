<?php 

	// insere a classe
	include_once 'ClasseProduto.php';

	// cria um objeto
	$valor1 = new Produto();
	$valor2 = new Produto();

	// atribuir valores
	$valor1->Codigo = 4001;
	$valor1->Descricao = "CD The Best of Eric Clapton";

	$valor2->Codigo = 4002;
	$valor2->Descricao = "CD The Eagles Hotel California";


	//imprimindo os valores
	$valor1->ImprimeEtiqueta();
	$valor2->ImprimeEtiqueta();

 ?>