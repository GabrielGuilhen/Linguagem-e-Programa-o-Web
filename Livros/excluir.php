<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

$con = Conexao::getConexao();

$sql = "DELETE FROM livros WHERE id = ?";
$stm = $con->prepare($sql);
$stm->execute([$_GET["id"]]);
$livros = $stm->fetchAll();

header("location: Index.php");
