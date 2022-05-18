<html>

<head>

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/dadoidoso.css">
</head>

<body>
	<?php
	include("conexao.php");
	$ididoso = $_GET['ididoso'];

	$sql = "select * from idosos where ididoso=$ididoso";
	$rs = mysqli_query($con, $sql);
	while ($linha = mysqli_fetch_array($rs)) {
	?>
		<h1>Dados do Idoso</h1>
		<div class="tabela-conteiner" id="1">
			<table class="table table-info table-bordered">
				<thead>
					<td> <?php echo 'id: '; ?></td>
					<td> <?php echo  $linha['ididoso']; ?></tr>
					<td> <?php echo 'nome: '; ?></td>
					<td> <?php echo $linha['nome_idoso']; ?></tr>
					<td> <?php echo 'Data de Nascimento: '; ?></td>
					<td> <?php echo $linha['nascimento']; ?></tr>
					<td> <?php echo 'Enfermeira Responsavel: '; ?></td>
					<td> <?php echo $linha['enfermeira']; ?></tr>
					<td> <?php echo 'CPF do paciente: '; ?></td>
					<td> <?php echo $linha['cpf']; ?></tr>
					<td> <?php echo 'Genero: '; ?></td>
					<td> <?php echo $linha['genero']; ?></tr>
					<td> <?php echo 'Alergias: '; ?></td>
					<td> <?php echo $linha['alergia']; ?></tr>
					<td> <?php echo 'Comorbidades: '; ?></td>
					<td> <?php echo $linha['comorbidade']; ?></tr>
					<td> <?php echo 'Numero do SUS: '; ?></td>
					<td> <?php echo $linha['numero_sus']; ?></tr>
					<td> <?php echo 'Observações: '; ?></td>
					<td> <?php echo $linha['obs']; ?></tr>
						<table class="table table-primary table-bordered">
							<td> <?php echo 'Nome do Responsavel: '; ?></td>
							<td> <?php echo $linha['nome_resp']; ?></tr>
							<td> <?php echo 'Telefone do Responsavel: '; ?></td>
							<td> <?php echo $linha['telefone_resp']; ?></tr>
							<td> <?php echo 'Grau de parentesco com o responsavel: '; ?></td>
							<td> <?php echo $linha['parentesco']; ?></tr>
							<td> <?php echo 'Endereço do responsavel: '; ?></td>
							<td> <?php echo $linha['endereco_resp']; ?></tr>
						</table>
						</tr>
			</table>

		<?php }
	if (isset($_POST['btn btn-primary'])) {
		$data_hora = $_POST['data_hora'];
		$idutiliza = $_POST['idutiliza'];

		$sql = "INSERT INTO checagem (data_hora, idutiliza)
	VALUES ('$data_hora', '$idutiliza')";
		mysqli_query($con, $sql);
		echo $sql;

		if (mysqli_affected_rows($con) > 0) {
			echo "<script> alert('Usuário alterado com sucesso.') </script>";
			header("Location: dadoidosos.php");
		} else {
			echo "<script> alert('Ocorreu algum erro.') </script>";
		}
	}

		?>
		<?php
		$Object = new DateTime();
		$Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
		$DateAndTime = $Object->format("Y-m-d h:i:s a");
		echo "The current date and time in Amsterdam are $DateAndTime.\n";
		?>
		<?php
		$sql = "select * from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=$ididoso";
		$rs = mysqli_query($con, $sql);
		$idremedio = ['idremedio'];
		while ($linha = mysqli_fetch_array($rs)) { ?>
			<div class="tabela-conteiner" id="3">
				<table class="table table-warning table-bordered">
					<thead>
						<td> <?php echo 'Nome do Remedio: '; ?></td>
						<td> <?php echo $linha['nome_remed'];; ?></td>
						<?php $sql = "select * from medicamentos where idremedio=['idremedio']";

						?>
						<td>
							<!-- fazer com que esse input envie a data que o remedio foi tomado e quando ele tiver sido tomado no dia ficar verde (antes sendo vermelho) -->
							<form method="POST">
								<input type="hidden" name="idutiliza" value="<?php echo $linha['idutiliza'] ?>">
								<?php $data_hora = date('m-d-Y h:i:s a', time()); ?>
								<input type="hidden" name="data_hora" value="<?php echo $DateAndTime ?>">
								<input type="hidden" name="ididoso" value="<?php echo $linha['ididoso'] ?>">
								<input type="submit" onclick="Enviar();" name=" enviar" class="btn btn-primary">

							</form>
							</tr>
						<td> <?php echo 'Data Inicial: '; ?></td>
						<td> <?php echo $linha['data_inicio']; ?></tr>
						<td> <?php echo 'Data Final: '; ?></td>
						<td> <?php echo $linha['data_fim']; ?></tr>
						<td> <?php echo 'Dosagem: '; ?></td>
						<td> <?php echo $linha['dosagem']; ?></tr>
						<td> <?php echo 'Horario: '; ?></td>
						<td> <?php echo $linha['horario']; ?></tr>
						<td> <?php echo 'Observaçôes: '; ?></td>
						<td> <?php echo $linha['obs']; ?></tr>
				</table>
			</div>
		<?php } ?>
</body>

</html>