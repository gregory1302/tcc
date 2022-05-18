<html>
<?php
include("conexao.php");
$ididoso = $_GET['ididoso'];

"SELECT * FROM idosos WHERE ididoso=$ididoso";
?>

<head>
	<!-- Compiled and minified CSS
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library 
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/stylecadastro.css">
</head>

<body>
	<title>Cadastro Medicamentos</title>
	<h2> do idoso
		<?php echo $ididoso ?>
	</h2>
	<?php include("boton.html") ?>
	<div id="cad-conteiner3">
		<form action="recebemedicamento.php" method="POST">
			Medicamento: <select name="idremedio">
				<option>Selecione</option>
				<?php $sql = "select * from medicamentos";
				$rs = mysqli_query($con, $sql);
				while ($linha = mysqli_fetch_array($rs)) { ?>
					<option value=<?php echo $linha['idremedio'] ?>>
						<?php echo $linha['nome_remed'] ?>
					</option>
				<?php } ?>
			</select><BR>
			<label>Horario:</label> <input class="form-control" type="text" name="horario"><br>
			<label>Dosagem:</label> <input type="text" name="dosagem"><br>
			<label>Data inicial:</label> <input type="date" name="datainicial"><br>
			<label>Data fim:</label> <input type="date" name="datafinal"><br>
			<label>Observações:</label> <input type="text" name="obs"><br>
			<input type="hidden" name="ididoso" value="<?php echo $ididoso ?>">
			<input type="submit" name="enviar">
		</form>
	</div>
</body>

</html>