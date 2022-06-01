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
    /*include("conexao.php");

$data_hora = $_POST['data_hora'];
$idutiliza = $_POST['idutiliza'];

$sql = "INSERT INTO checagem (data_hora, idutiliza)
VALUES ('$data_hora', '$idutiliza')";
mysqli_query($con, $sql);
echo $sql;*/

    /*if (isset($_POST['btn btn-primary'])) {
    $data_hora = $_POST['data_hora'];

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
}*/ include('conexao.php');/*
if (isset($_POST['submit'])) {
    $DateAndTime = $_POST['DateAndTime'];
    $idutiliza = $_POST['idutiliza'];

    $result = mysqli_query($con, "INSERT INTO checagem (data_hora, idutiliza)
    VALUES ('$DateAndTime', '$idutiliza')");
    echo "<script>alert('Usuário cadastrado com sucesso, redirecionando ao login...');</script>";
    // header("refresh:1;url=checagem_teste.php");
    mysqli_query($con, $sql);
    echo $sql;
} else {
    echo "erro";
}*/
    ?>
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
    ?><?php /*
<form method="POST" class="form" action="checagem_teste.php">

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
</form> */ ?>
    <?php
    $sql = "select * from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=1";
    $rs = mysqli_query($con, $sql);
    while ($linha = mysqli_fetch_array($rs)) { ?>
        <div class="tabela-conteiner">
            <div class="remedio">
                <table class="table table-warning table-bordered">


                    <!-- tentar transformar os remedios em accordion -->
                    <thead>

                        <td> <?php echo 'Nome do Remedio: '; ?></td>
                        <td> <?php echo $linha['nome_remed'];; ?></tr>
                            <?php $sql = "select * from medicamentos where idremedio=['idremedio']";

                            ?>

                        <td> <?php echo 'Data Inicial: '; ?></td>
                        <td> <?php echo $linha['data_inicio']; ?></tr>
                        <td> <?php echo 'Data Final: '; ?></td>
                        <td> <?php echo $linha['data_fim']; ?></tr>
                        <td> <?php echo 'Dosagem: '; ?></td>
                        <td> <?php echo $linha['dosagem']; ?></tr>
                        <td> <?php echo 'Horario: '; ?></td>
                        <td> <?php echo $linha['horario']; ?></tr>
                        <td> <?php echo 'Observaçôes: '; ?></td>
                        <td> <?php echo $linha['obs']; ?></tr> <?php } ?>

                </table>
            </div>
            <?php $Object = new DateTime();
            $Object->setTimezone(new DateTimeZone('America/Sao_Paulo'));
            $DateAndTime = $Object->format("Y-m-d h:i:s a"); ?>

            <?php $sql = "select idutiliza from utiliza, medicamentos where utiliza.idremedio = medicamentos.idremedio and ididoso=1";
            $rs = mysqli_query($con, $sql);
            while ($linha = mysqli_fetch_array($rs)) { ?>

                <!-- fazer com que esse input envie a data que o remedio foi tomado e quando ele tiver sido tomado no dia ficar verde (antes sendo vermelho) -->
                <!-- conseguir fazer a checagem aparecer do lado de cada remedio -->
                <form method="POST" class="form" action="dadoidosos.php?ididoso=<?php echo $linha['ididoso'] ?>">


                    <input type="hidden" name="DateAndTime" value="<?php echo $DateAndTime ?>"></input>
                    <input type="hidden" name="idutiliza" value="<?php echo $linha['idutiliza'] ?>"> <?php }
                                                                                                        ?>
                <button class="btn btn-outline-success mt-3" type="submit" name="submit">Criar</button>

                </form>


        </div>

</body>

</html>