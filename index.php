<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com php</title>
</head>

<body>
    <h2>Área de teste</h2>
    <?php
        if (isset($_SESSION['msgError'])) :
            echo $_SESSION['msgError'];
            unset($_SESSION['msgError']);
        endif;
    ?>
    <form action="auth/valida.php" method="post">
        <label for="username">Usuário</label>
        <input type="text" name="userName" placeholder="Digite seu usuário"><br><br>
        <label for="userPassword">Senha</label>
        <input type="password" name="userPassword" placeholder="Digite sua senha"><br><br>
        <input type="submit" name="btnLogin" value="Acessar">
    </form>
</body>

</html>