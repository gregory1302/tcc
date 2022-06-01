<html>

<body>
    <?php
    include("conexao.php");
    $ididoso = $_POST['ididoso'];
    $idremedio = $_POST['idremedio'];
    $horario = $_POST['horario'];
    $dosagem = $_POST['dosagem'];
    $datainicial = $_POST['datainicial'];
    $datafinal = $_POST['datafinal'];
    $obs = $_POST['obs'];


    echo "ID REMEDIO: $idremedio <br>";
    echo "ID IDOSO: $ididoso <br>";
    echo "Horario: $horario <br>";

    echo "Dosagem: $dosagem <br>";

    echo "Datainicial: $datainicial <br>";
    echo "data final: $datafinal <br>";
    echo "Observação: $obs <br>";

    $sql = "INSERT INTO utiliza (ididoso, idremedio, data_inicio, data_fim, dosagem, horario, obs)
    VALUES ('$ididoso', '$idremedio', '$datainicial', '$datafinal', '$dosagem', '$horario', '$obs')";
    mysqli_query($con, $sql);
    echo $sql;
    mysqli_close($con);
    ?>

</body>

</html>