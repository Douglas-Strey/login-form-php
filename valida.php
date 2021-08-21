<?php
session_start();

include_once ("conexao.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if ($btnLogin) :
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);

    if (!empty($userName) && !empty($userPassword)) :
        // Gerar senha criptografada
        /* echo password_hash($userPassword, PASSWORD_DEFAULT); */
    else: 
        $_SESSION['msgError'] = "Usuário e/ou senha incorreto!";
        header("Location: index.php");
    endif;
else:
    $_SESSION['msgError'] = "Página não encontrada!";
    header("Location: index.php");
endif;