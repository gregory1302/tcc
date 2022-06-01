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
    include('conexao.php');
    if (isset($_POST['submit'])) {
        include_once('conexao.php');
        $DateAndTime = $_POST['DateAndTime'];
        $idutiliza = $_POST['idutiliza'];

        $result = mysqli_query($con, "INSERT INTO checagem (data_hora, idutiliza) 
    VALUES ('$DateAndTime', '$idutiliza')");
        print_r($_POST['DateAndTime']);
        print_r($_POST['idutiliza']);
    }



    $ididoso = $_GET['ididoso'];

    $sql = "select * from idosos where ididoso=$ididoso";
    $rs = mysqli_query($con, $sql);
    while ($linha = mysqli_fetch_array($rs)) {
    ?>
        <div class="tabela-conteiner">
            <div class="um">
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
                </table>
            </div>
            <div class="dois">
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
            </div>
        </div>
    <?php }

    ?>

    <?php
    $sql = "select * from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=$ididoso";
    $rs = mysqli_query($con, $sql);
    $idremedio = ['idremedio'];
    while ($linha = mysqli_fetch_array($rs)) { ?>
        <div class="tabela-conteiner" id="3">
            <div class="remedio">
                <table class="table table-warning table-bordered">

                    <div class="panel">
                        <!-- tentar transformar os remedios em accordion -->
                        <thead>
                            <td>
                                <!-- fazer com que esse input envie a data que o remedio foi tomado e quando ele tiver sido tomado no dia ficar verde (antes sendo vermelho) -->
                                <form method="POST" class="form" action="dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>">

                                    <?php
                                    $Object = new DateTime();
                                    $Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
                                    $DateAndTime = $Object->format("Y-m-d h:i:s a"); ?>
                                    <input type="hidden" name="DateAndTime" value="<?php echo $DateAndTime ?>"></input>
                                    <?php $sql = "SELECT * from utiliza where idremedio=1 and ididoso=1";
                                    $rs = mysqli_query($con, $sql);
                                    while ($linha = mysqli_fetch_array($rs)) { ?>
                                        <input type="hidden" name="idutiliza" value="<?php echo $linha['idutiliza'] ?>"> <?php } ?>
                                    <button class="btn btn-outline-success mt-3" type="submit" name="submit">Criar</button>
                                </form>
                            </td>
                            <td> <?php echo 'Nome do Remedio: '; ?></td>
                            <td> <?php echo $linha['nome_remed'];; ?></td>
                            <?php $sql = "select * from medicamentos where idremedio=['idremedio']";
                            ?>

                            <td><button class="accordion">dfdgfd</tr>
                    </div>
                    <?php $sql = "select * from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=$ididoso";
                    $rs = mysqli_query($con, $sql);
                    $idremedio = ['idremedio'];
                    while ($linha = mysqli_fetch_array($rs)) { ?>
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
        </div>
<?php }
                } ?>
<td><button class="accordion">dfdgfd</tr>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
</body>

</html>