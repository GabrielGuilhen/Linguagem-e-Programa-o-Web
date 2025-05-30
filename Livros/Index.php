<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

$con = Conexao::getConexao();

// Buscar livros já salvos no banco de dados
$sql = "SELECT * FROM livros";
$stm = $con->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();
//echo "<pre>" . print_r($livros, true) . "</pre>";

$msgErro = '';

// Verificar se o usuário já clicou no gravar
if (isset($_POST["titulo"])) {
    // Obter os valores digitados pelo usuário
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $paginas = $_POST["paginas"];
    $autor = $_POST["autor"];

    //Validar os dados

    $erros = array();
    if(! $titulo){
        array_push($erros, 'Informe o titulo!');
    }
    if(! $autor){
        array_push($erros, 'Informe o autor!');
    }
    if(! $genero){
        array_push($erros, 'Informe o gênero!');
    }
    if(! $paginas){
        array_push($erros, 'Informe a quantidade de páginas!');
    }else if()
    if($paginas <= 0){
        array_push($erros, 'Informe paginas maiores que 0!');
    }
    if(count($erros)==0){  
        
        // Inserir as informações na base de dados
        $sql = "INSERT INTO livros (titulo, genero, qtd_paginas, autor)
                VALUES (?, ?, ?, ?)";
        $stm = $con->prepare($sql);
        $stm->execute([$titulo, $genero, $qtd_paginas, $autor]);
        
        // Redirecionar para a mesma página a fim de limpar o buffer do navegador
        header("location: Index.php");
    }else{
        $msgErro = implode("<br>", $erros);
        
    }
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
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th>Autor</th>
            <th>Excluir</th>
        </tr>

        <?php foreach ($livros as $l) : ?>
            <tr>
                <td><?php echo $l['id']; ?></td>
                <td><?php echo $l['titulo']; ?></td>
                <td>
                    <?php
                    if ($l["genero"] == 'D') {
                        echo 'Drama';
                    } else if ($l["genero"] == 'O') {
                        echo 'Outro';
                    } else if ($l["genero"] == 'R') {
                        echo 'Romance';
                    } else if ($l["genero"] == 'F') {
                        echo 'Ficção';
                    }
                    ?>
                </td>
                <td><?php echo $l['qtd_paginas']; ?></td>
                <td><?php echo $l['autor']; ?></td>
                <td><a href="excluir.php?id=<?= $l['id'] ?>"
                        onclick="return confirm('Confirma a exclusão')">excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h1>Formulário</h1>

    <!--<form action="" method="post" onsubmit="return validar();">-->
    <form action="" method="post" >
        <div style="margin-bottom: 10px;">
            <label for="titulo">Título:</label>
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

        <div style="margin-bottom: 10px;">

            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor">

        </div>

        <div>
            <button type="submit">Gravar</button>
        </div>
        <div id="div-erro" style= "color:red";>
            <?= $msgErro?>
    
        </div>
    </form>

    <script src = "js/validacao.js"></script>

</body>

</html>
