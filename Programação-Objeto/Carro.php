<?php 
	
	class Carro
	{
		var $Cor;
		var $Ano;
		var $NumeroPortas;
		var $Peso;

			function ImprimeEtiqueta()
		{
			print 'Cor: ' . $this->Cor . "<br>";
			print 'Ano: ' . $this->Ano . "<br>";
			print 'NumeroPortas: ' . $this->NumeroPortas . "<br>";
			print 'Peso: ' . $this->Peso . "<br>";
		}

	}



 ?>