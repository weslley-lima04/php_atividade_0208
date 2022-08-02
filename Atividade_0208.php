<?php 

$con = mysqli_connect("localhost", "root", "", "Cliente");	

	if (mysqli_connect_errno())
	{
		echo "Erro: ".mysqli_connect_error();
	}
	else
	{
		echo "Bem vindo.";

		$sql = "INSERT INTO Pessoa VALUES('null', '$_POST[nome]', '$_POST[sobrenome]', '$_POST[email]', '$_POST[cpf]', '$_POST[gen]', '$_POST[user]', '$_POST[senha]')";

		if(mysqli_query($con, $sql))
		{
			echo "Cadastro realizado com sucesso!";
		}
		else
		{
			echo "Erro ao realizar cadastro. Por favor, tente novamente em alguns instantes.".mysqli_error($con);
		}

		mysqli_close($con);
	}
	

 ?>
