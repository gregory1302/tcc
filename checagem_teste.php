<?php
/*include("conexao.php");

$data_hora = $_POST['data_hora'];
$idutiliza = $_POST['idutiliza'];

$sql = "INSERT INTO checagem (data_hora, idutiliza)
VALUES ('$data_hora', '$idutiliza')";
mysqli_query($con, $sql);
echo $sql;*/

if (isset($_POST['btn btn-primary'])) {
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
}
?>
<form method="post">

    <?php $data_hora = date('m-d-Y h:i:s a', time()); ?>
    <input type="hidden" name="data_hora" value="<?php echo $DateAndTime ?>"></input>
    <input type="submit" onclick="Enviar();" name=" enviar" class="btn btn-primary">
</form>