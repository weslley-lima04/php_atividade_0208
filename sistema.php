<?php 
	
	session_start();
	$user = $_SESSION['nome'];
	echo "Bem-vindo, ".$user."!";
	echo "<p></p>";

 ?>

  <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form name='sistema' method='post' action='login.php'>
 		<input type='submit' value='Sair' onclick=<?php session_destroy(); ?>>
 	</form>
 </body>
 </html>