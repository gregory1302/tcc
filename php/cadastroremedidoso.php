<html>

<body>
    <?php
    include("conexao.php");
    $horario = $_POST['horario'];
    $dosagem = $_POST['dosagem'];
    $datafim = $_POST['datafim'];
    $datainicial = $_POST['datainicio'];
    $obs = $_POST['obs'];

    echo "Horario: $horario <br>";
    echo "Dosagem: $dosagem <br>";
    echo "Datainicial: $datainicial <br>";
    echo "Data Final: $datafim <br>";
    echo "Observação: $obs <br>";

    $sql = "INSERT INTO utiliza (data_inicio, data_fim, dosagem, horario, obs)
    VALUES ('$datainicial', '$datafim', '$dosagem', '$horario', '$obs')";

    mysqli_query($con, $sql);

    mysqli_close($con);
    ?>


</body>

</html>