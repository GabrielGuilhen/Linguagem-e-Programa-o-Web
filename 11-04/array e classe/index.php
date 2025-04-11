<?php

require_once("modelo/Pessoa.php");

$tipo = $_GET['tipo'];

if ($tipo = "a") {
    $pessoa = [
        "nome" => "",
        "sobrenome" => "",
        "idade" => "",
    ];
    $pessoa["nome"] = $_GET["nome"];
    $pessoa["sobrenome"] = $_GET["sobrenome"];
    $pessoa["idade"] = $_GET["idade"];

    echo "Nome Completo: " . $pessoa["nome"] . " " . $pessoa["sobrenome"] . "<br>";
    echo "Idade: " . $pessoa["idade"];


} elseif ($tipo = "c") {

    $pessoa = new Pessoa();
    $pessoa->setNome($_GET["nome"]);
    $pessoa->setSobrenome($_GET["sobrenome"]);
    $pessoa->setIdade($_GET["idade"]);
    echo "Nome Completo: " . $pessoa->getNome() . " " . $pessoa->getSobrenome() . "<br>";
    echo "Idade: " . $pessoa->getIdade();
}
