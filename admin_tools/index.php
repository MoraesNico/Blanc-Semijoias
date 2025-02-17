<?php
include 'cabecalho.php';
include '../conexao.php';
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    header("Location: login.php");
    exit();
}
?>

<h1> olá</h1>

<?php include 'rodape.php'; ?>