<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/styles-login.css">

</head>

<body>

    <?php
    session_start();

    if ($_SESSION && $_SESSION['autenticado']) {
        print "<a href='?sair=1'>Logout</a>";
    }


    if ($_GET && $_GET['sair'] == 1) {
        $_SESSION['autenticado'] = 0;
        session_destroy();
    }


    ?>
    <div id="login-conteiner">
        <h1>Login</h1>
        <form method="POST" action="listaidoso.php">
            <label for="login">Login</label>
            <input type="login" name="login" id="login" placeholder="digite seu login" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="digite a sua senha">
            <input type="submit" value="Login">





        </form>


    </div>

</body>

</html>