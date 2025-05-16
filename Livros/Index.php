<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

$con = Conexao::getConexao();

//Buscar livros já salvos no banco de dados
$sql = "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();
echo "<pre>" . print_r($livros, true) . "</pre>";

//verificar se o usuario já clicou no gravar;
if (isset($_POST["titulo"])) {

    //obter os valores digitados pelo usuario

    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $paginas = $_POST["paginas"];

    //Inserir as informações na base de dados

    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas)
            VALUES(? , ? , ?)";

    $stm = $con->prepare($sql);
    $stm->execute([$titulo, $genero, $paginas]);
}

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>

</head>

<body>

    <h1>Listagem</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Coluna</th>
            <th>Gênero</th>
            <th>Páginas</th>
        </tr>

        <?php
        foreach ($livros as $l) : ?>
            <tr>
                <td><?php echo $l['id'] ?></td>
                <td><?php echo $l['titulo'] ?></td>
                <td><?php echo $l['genero'] ?></td>
                <td><?php echo $l['qtd_paginas'] ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <h1>Formulário</h1>

    <form action="" method="post">

        <div style="margin-bottom: 10px;">
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="genero">Gênero:</label>
            <select name="genero" id="genero">
                <option value="">----Selecione----</option>
                <option value="D">Drama</option>
                <option value="F">Ficção</option>
                <option value="R">Romance</option>
                <option value="O">Outro</option>
            </select>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="paginas">Páginas:</label>
            <input type="number" name="paginas" id="paginas">
        </div>
        <div>
            <button type="submit">Gravar</button>
        </div>
    </form>

</body>

</html>
