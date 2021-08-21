<?php
session_start();

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if ($btnLogin) :
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);
    echo "$userName - $userPassword";

    if (!empty($userName) && !empty($userPassword)) :

    else: 
        $_SESSION['msgError'] = "Usuário e/ou senha incorreto!";
        header("Location: index.php");
    endif;
else:
    $_SESSION['msgError'] = "Página não encontrada!";
    header("Location: index.php");
endif;