html>

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
    $ididoso = $_GET['ididoso'];
    include("conexao.php");
    $sql = "select * from idosos where ididoso=$idremedio";
    $rs = mysqli_query($con, $sql);
    while ($linha = mysqli_fetch_array($rs)) {
    ?>
        <h1>Dados do Idoso</h1>
        <div id="tabela-conteiner">
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
                    <td> <?php echo 'CFP do paciente: '; ?></td>
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
                        </table </tr>
            </table>

        <?php } ?>
</body>

</html>