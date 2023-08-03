<?php 
	
	// Criando conexão com a base de dados db_3HPW3

	$con = mysqli_connect("localhost","root","","db3hpw3");

	// Verificando a conexão

	if (mysqli_connect_errno()){


		echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();

	}

	$sql1 = "INSERT INTO tbpessoa VALUES('Ana','Souza', 20)";

	mysqli_query($con,$sql1);

	$sql2 = "INSERT INTO tbpessoa(Nome, sobrenome, Idade)VALUES ('Carlos','Costa',21)";

	mysqli_query($con,$sql2);

	mysqli_close($con);



 ?>