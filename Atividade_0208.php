<?php 

$con = mysqli_connect("localhost", "root", "", "Cliente");	

	if (mysqli_connect_errno())
	{
		echo "Erro: ".mysqli_connect_error();
	}
	else
	{
		//echo "Banco conectado.";







		mysqli_close($con);
	}
	


 ?>