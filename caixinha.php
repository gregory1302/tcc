<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
	<link rel="stylesheet" href="css/styles-caixinha.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/stylenav.css">
</head>

<body>

	<?php /*

	session_start();

	define('DB_SERVER', 'proj.sombrio.ifc.edu.br');
	define('DB_USERNAME', 'medlar');
	define('DB_PASSWORD', 'unygahyda');
	define('DB_NAME', 'medlar_site');


	$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Check connection

	if ($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	if ($_POST || !$_SESSION['autenticado']) {

		$sql = "SELECT * FROM Usuarios WHERE Login = '" . $_POST['login'] . "' AND Senha = '" . $_POST['senha'] . "'";

		$result = mysqli_query($link, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "Autenticado <br>";
			$_SESSION['autenticado'] = 1;
		} else {
			echo "Usuario ou senha incorretos";
			die;
		}
	}
	include("navbar2.html")*/
	?>


	<?php
	$DateAndTime = date('m-d-Y h:i:s a', time());
	echo "The current date and time are $DateAndTime.";
	?>
</body>

</html>