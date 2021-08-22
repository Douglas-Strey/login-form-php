<?php

session_start();

include_once ("../hooks/functions.php");

if (!empty($_SESSION['id'])) :
    echo "Olá " . $_SESSION['nome'] . ", bem vindo! <br />";
    echo "<a href='../auth/sair.php'>Sair</a>";
else:
    redirectIndexPage("Você precisa estar logado para acessar esta página!");
endif;
