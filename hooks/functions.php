<?php

function redirectIndexPage(string $msg)
{
    $_SESSION['msgError'] = $msg;
    header("Location: ../index.php");
}