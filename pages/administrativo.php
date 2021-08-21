<?php

session_start();

echo "Olá ". $_SESSION['nome'] .", bem vindo! <br />";
echo "<a href=''>Sair</a>";