<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<body>
	<?php


	$nome = $_POST['nome'];
	$nasceu = $_POST['nascimento'];
	$enfermeira = $_POST['enfermeira'];
	$cpf = $_POST['cpf'];
	$planosaude = $_POST['planosaude'];
	$genero = $_POST['genero'];
	$alergia = $_POST['alergia'];
	$comorbidade = $_POST['comorbidade'];
	$numerosus = $_POST['numerosus'];
	$obs = $_POST['obs'];
	$nomeresp = $_POST['nomeresp'];
	$telefoneresp = $_POST['telefoneresp'];
	$parentesco = $_POST['parentesco'];
	$enderecoresp = $_POST['enderecoresp'];
	$sql = "INSERT INTO idosos (nome_idoso, nascimento, genero, enfermeira, alergia, comorbidade, obs, numero_sus, cpf, plano_saude, nome_resp, telefone_resp, parentesco, endereco_resp) 
  VALUES ('$nome', '$nasceu', '$genero', '$enfermeira', '$alergia', '$comorbidade',  '$obs', '$numerosus', '$cpf', '$planosaude', '$nomeresp', '$telefoneresp', '$parentesco', '$enderecoresp')";

	include("conexao.php");
	?>

	<title>Cadastro Idosos</title>
	<form action="cadastroidoso.php" method="POST">
		<label>Nome:</label> <input type="text" name="nome"><br>
		<label>Data de Nascimento:</label> <input type="date" name="nascimento"><br>
		<label>Enfermeira:</label> <input type="text" name="enfermeira"><br>
		<label>Numero do CPF:</label> <input type="text" name="cpf"><br>
		<label>Plano de Saude:</label>
		<input type="radio" name="planosaude" value="sim">sim
		<input type="radio" name="planosaude" value="nao">nao<br>
		<label>Genero:</label>
		<input type="radio" name="genero" value="F">Feminino
		<input type="radio" name="genero" value="M">Masculino
		<input type="radio" name="genero" value="O">Outro<br>
		<label>Alergias:</label> <input type="text" name="alergia"><br>
		<label>Comorbidades:</label> <input type="text" name="comorbidade"><br>
		<label>Numero do SUS:</label> <input type="text" name="numerosus"><br>
		<label>Observação:</label> <input type="text" name="obs">
		<p>Informações do Responsavel:</p><br>
		<label>Nome:</label><input type="text" name="nomeresp"><br>
		<label>Telefone:</label><input type="text" name="telefoneresp"><br>
		<label>Grau de Parentesco:</label> <input type="text" name="parentesco"><br>
		<label>Endereço:</label><input type="text" name="enderecoresp"><br>
		<input type="submit" name="enviar">
</body>

</html>