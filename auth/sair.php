<?php

session_start();

include_once ("../hooks/functions.php");

unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

redirectIndexPage("Deslogado com sucesso!");