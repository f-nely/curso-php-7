<?php
session_start();

//echo $_SESSION['name'];

//var_dump($_SESSION);

if (!isset($_SESSION['auth'])) {
    header('Location: 38_set_sessoes.php');
}

echo 'Painel de Admin';