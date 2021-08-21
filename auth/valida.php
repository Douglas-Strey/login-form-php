<?php
session_start();

include_once ("../conexao.php");
include_once ("../hooks/functions.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if ($btnLogin) :
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);

    if (!empty($userName) && !empty($userPassword)) :
        // Gerar senha criptografada
        /* echo password_hash($userPassword, PASSWORD_DEFAULT); */
        $query = "SELECT id, nome, email, senha FROM usuarios WHERE usuario = '$userName' LIMIT 1";
        $result_usuario = mysqli_query($conn, $query);

        if ($result_usuario) :
            $row_usuario = mysqli_fetch_assoc($result_usuario);

            if (password_verify($userPassword, $row_usuario['senha'])) :
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];


                header("Location: /pages/administrativo.php");
            else:
                redirectIndexPage("Usuário e/ou senha incorreto!");
            endif;
        endif;

    else: 
        redirectIndexPage("Usuário e/ou senha incorreto!");
    endif;

else:
    redirectIndexPage("Página não encontrada!");
endif;