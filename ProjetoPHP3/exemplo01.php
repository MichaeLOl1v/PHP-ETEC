<?php 
	// Criando uma conexão com o banco de dados

	$con = mysqli_connect("localhost","etecia","123456", "db_exemplo");

	// checando a conexão 

	if (mysqli_connect_errno()){


		echo "Erro ao conectar com a base de dados: ".

		mysqli_connect_error();

	}else{

			// Criando base de dados

			$sql = "CREATE DATABASE db_2HPW2";

				if (mysqli_query($con,$sql)){

					echo "<br/>Base de Dados criada com sucesso!!";

				}else{

					echo "<br/>Erro: " .mysql_error($con);
					
				}


			echo "Conexão Aberta <br>";

			mysqli_close($con);	

			echo "Conexão Fechada <br>";
	}






 ?>