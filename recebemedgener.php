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
	$nome_remed = $_POST['nomeremed'];
	$descricao = $_POST['descricao'];
	//$horario = $_POST['hora'];
	$categoria = $_POST['categoria'];
	//$dosagem = $_POST['dosagem'];
	$possivel_reacao = $_POST['possivel_reacao'];
	//$continuo = $_POST['continuo'];
	//$periodo = $_POST['periodo'];
	//$datainicial = $_POST['datainicial'];
	$refrigeracao = $_POST['refrigeracao'];
	$obs = $_POST['obs'];

	/*
	 echo "Nome: $nome_remed <br>";
	 echo "Descrição: $descricao <br>";
	//echo "Horario: $horario <br>";
	 echo "Categoria: $categoria <br>";
	//echo "Dosagem: $dosagem <br>";
	 echo "Possiveis reações: $possivel_reacao <br>";
	//echo "Continuo: $continuo <br>";
	//echo "Periodo: $periodo <br>";
	//echo "Datainicial: $datainicial <br>";
	 echo "Refrigeração: $refrigeracao <br>";
	 echo "Observação: $obs <br>"; */ ?>


	<div id="tabela-conteiner">
		<table class="table table-info table-bordered">
			<thead>
				<td> <?php echo 'nome: '; ?></td>
				<td> <?php echo  $nome_remed; ?></tr>
				<td> <?php echo 'Descrição: '; ?></td>
				<td> <?php echo $descricao; ?></tr>
				<td> <?php echo 'Categoria: '; ?></td>
				<td> <?php echo $categoria; ?></tr>
				<td> <?php echo 'Possiveis reações: '; ?></td>
				<td> <?php echo $possivel_reacao; ?></tr>
				<td> <?php echo 'Refrigeração: '; ?></td>
				<td> <?php echo $refrigeracao; ?></tr>
				<td> <?php echo 'Observação: '; ?></td>
				<td> <?php echo $obs; ?></tr>

					<?php $sql = "INSERT INTO medicamentos (nome_remed, descricao, categoria, possivel_reacao, refrigeracao, obs)
					VALUES ('$nome_remed', '$descricao', '$categoria', '$possivel_reacao', '$refrigeracao', '$obs')";

					mysqli_query($con, $sql);
					//echo $sql;
					mysqli_close($con);
					?>

</body>

</html>