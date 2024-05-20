<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "Acesso negado!";
    exit();
}

$username = $_COOKIE['username'];
include 'telinha.html';
?>
