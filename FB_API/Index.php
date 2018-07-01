<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
    <title>Datos de Usuario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<?php
	
		session_start();

		if (!isset($_SESSION['Token'])) {
			header('Location: Vista/Login_Facebook.php');			
			exit();
		}

	?>

</head>

<body>
	<div class="container" style="margin-top: 150px">
		<div class="d-flex justify-content-center">
			
			<div>
				<img src="<?php echo $_SESSION['USER']['picture']['url'] ?>">
			</div>

			<div>
				<table class="table table-hover table-dark">
					<tr>
						<th scope="col">ID_USER</th>
						<td><?php echo $_SESSION['USER']['id'] ?></td>
					</tr>
					<tr>
						<th scope="col">First Name</th>
						<td><?php echo $_SESSION['USER']['first_name'] ?></td>
					</tr>
					<tr>
						<th scope="col">Last Name</th>
						<td><?php echo $_SESSION['USER']['last_name'] ?></td>
					</tr>
					<tr>
						<th scope="col">Email</th>
						<td><?php echo $_SESSION['USER']['email'] ?></td>
					</tr>
				</table>
			</div>

		</div>
	</div>

</body>
</html>

