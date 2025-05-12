<?php

class ItemBatman {
    public function __construct(
        public $nome,
        public $imagem,
        public $dica
    ) {}
}


$itens = [
    1 => new ItemBatman(
        "Batarangue",
        "img/Batarang.jpeg",
        "Uma arma afiada que voa de volta ao dono!"
    ),
    2 => new ItemBatman(
        "Cinto de Utilidades",
        "img/Cinto_batman.jpeg",
        "Contém ferramentas para qualquer situação!"
    ),
    3 => new ItemBatman(
        "Bat-Sinal",
        "img/Bat_sinal.jpeg",
        "Ilumina os céus de Gotham!"
    )
];


session_start();
if (!isset($_SESSION['itemCorreto'])) {
    $_SESSION['itemCorreto'] = array_rand($itens);
}
$itemCorreto = $itens[$_SESSION['itemCorreto']];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Jogo da Adivinhação do Batman</title>
</head>
<body>
    <h1>Jogo da Adivinhação do Batman</h1>
    
    <?php if (!isset($_GET['palpite'])): ?>
        <p>Escolha um palpite:</p>
        <ul>
            <li><a href="?palpite=1">Batarangue</a></li>
            <li><a href="?palpite=2">Cinto de Utilidades</a></li>
            <li><a href="?palpite=3">Bat-Sinal</a></li>
        </ul>
    <?php else: 
        $palpite = (int)$_GET['palpite'];
        
        if ($palpite < 1 || $palpite > 3) {
            echo "<p>Erro: Palpite inválido! Use 1, 2 ou 3.</p>";
        } else {
            $itemSelecionado = $itens[$palpite];
            
            if ($itemSelecionado === $itemCorreto) {
                echo "<h2>Parabéns! Você acertou!</h2>";
                echo "<img src='{$itemCorreto->imagem}' width='300'>";
                echo "<p>{$itemCorreto->nome}: {$itemCorreto->dica}</p>";
                unset($_SESSION['itemCorreto']);
            } else {
                echo "<h2>Você errou!</h2>";
                echo "<p>Dica: {$itemCorreto->dica}</p>";
                echo "<img src='{$itemCorreto->imagem}' width='300' style='filter: blur(5px)'>";
            }
        }
    endif; ?>
    
    <p><a href="?">Jogar novamente</a></p>
</body>
</html>
