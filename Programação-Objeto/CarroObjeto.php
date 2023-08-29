<?php 

	// insere a classe
	include_once 'Carro.php';

	// cria um objeto
	$valor1 = new Carro();

	// atribuir valores
	$valor1->Cor = "Preto";
	$valor1->Ano = 2012;
	$valor1->NumeroPortas = 4;
	$valor1->Peso = "1000 KG";


	//imprimindo os valores
	$valor1->ImprimeEtiqueta();
	
 ?>
