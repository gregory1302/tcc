<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>lista idosos</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
	<link rel="stylesheet" href="css/lista.css">
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
	} */ ?>
	<div>
		<?php include("navbarteste4.html")   ?>
		<div id="lista-conteiner">
			<table class="table table-hover p-3 mb-2 bg-info text-white">
				<tr>
					<th>Nome</th>
					<th colspan="2">Ação</th>
				</tr>
				<tbody>

					<?php
					include("conexao.php");
					$sql = "select * from idosos";
					$rs = mysqli_query($con, $sql);
					while ($linha = mysqli_fetch_array($rs)) {
					?>

						<tr>
							<td><?php echo $linha['nome_idoso'] ?></a></td>
							<td class="text-center"><a class='btn btn-info btn-sm' href='dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
										<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
										<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
									</svg>
							<td class="text-center"><a class='btn btn-warning btn-sm' href='cadastromedicamentos.php?ididoso=<?php echo $linha['ididoso'] ?>'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
										<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
									</svg></a>
								<?php /*arrumar esses link esquisito*/ ?>

						</tr>
					<?php } ?>

		</div>
	</div>
	</tbody>

	</table>
</body>

</html>