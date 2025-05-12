<?php
class ItemBatman
{
    public function __construct(
        public $nome,
        public $imagem,
        public $dica
    ) {}
}


$itens = [
    1 => new ItemBatman("Batarangue", "img/Batarang.jpeg", "Arma que voa de volta"),
    2 => new ItemBatman("Cinto de Utilidades", "img/Cinto_batman.jpeg", "Ferramentas variadas"),
    3 => new ItemBatman("Bat-Sinal", "img/Bat_sinal.jpeg", "Ilumina Gotham")
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
    <title>Adivinhe o Item do Batman</title>
</head>

<body>
    <h1>Adivinhe o Item do Batman</h1>

    <?php if (!isset($_GET['palpite'])) { ?>
        <p>Escolha um palpite:</p>
        <ul>
            <li><a href="?palpite=1">Item 1 - Batarangue</a></li>
            <li><a href="?palpite=2">Item 2 - Cinto</a></li>
            <li><a href="?palpite=3">Item 3 - Bat-Sinal</a></li>
        </ul>
    <?php } else {
        $palpite = (int)$_GET['palpite'];

        if ($palpite < 1 || $palpite > 3) {
            echo "<p>Erro: Use 1, 2 ou 3.</p>";
        } else {
            $itemSelecionado = $itens[$palpite];

            if ($itemSelecionado === $itemCorreto) {
                echo "<h2>Acertou!</h2>";
                echo "<img src='{$itemCorreto->imagem}' width='300'>";
                unset($_SESSION['itemCorreto']);
            } else {
                echo "<h2>Errou!</h2>";
                echo "<p>Dica: {$itemCorreto->dica}</p>";
            }
        }
    } ?>

    <p><a href="?">Tentar novamente</a></p>
</body>

</html>
