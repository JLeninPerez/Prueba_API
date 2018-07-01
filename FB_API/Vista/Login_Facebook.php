<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<?php
		
		require_once('../Controlador/Conexion.php');
		$Permiso = ['email'];
		$URL = $Help->getLoginUrl($Direccion, $Permiso);

	?>

</head>

<body>
	
	<h2 align="center" style="margin-top: 15px"><font color="#00FF40">Logueate con Facebook</font></h2>
	
	<div class="container" align="center" style="margin-top: 70px">
		<img src="../Logo/User.png"><br><br><br>
		<button type="button" class= "btn btn-success" onclick= "window.location='<?php echo $URL ?>'">
			Login with Facebook
		</button>
	</div>

</body>
</html>




