<?php 

$user = $_POST['user'];
$senha = $_POST['senha'];


$con = mysqli_connect("localhost", "root", "", "Cliente");	

	if (mysqli_connect_errno())
	{
		echo "Erro: ".mysqli_connect_error();
	}
	else
	{
		

		//$sql = "SELECT UserCliente, SenhaCliente FROM Pessoa WHERE UserCliente LIKE '$_POST[user]'";
		$sql = "SELECT UserCliente, SenhaCliente FROM Pessoa";
		$resultado = mysqli_query($con, $sql);

		$pessoa = mysqli_fetch_array($resultado);

		/*while ($pessoa = mysqli_fetch_array($resultado))
		{
			
			echo $pessoa['UserCliente']."<br><br>";
			echo $pessoa['SenhaCliente']."<br><br>";
		}*/

		if ($user == $pessoa['UserCliente'] && $senha == $pessoa['SenhaCliente'] )
		{
			session_start();
			echo "Bem-vindo, ".$user."!";

			echo "<p></p>";


		} 
		else
		{
			echo "Login inválido.";
		}
		


		mysqli_close($con);
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form name="sistema" method="post" action="login.php">
 		<input type="submit" value="Sair" onclick=<?php session_destroy(); ?>>
 	</form>
 </body>
 </html>