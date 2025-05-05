<?php
require_once 'Jogo.php';

header('Content-Type: text/plain; charset=utf-8');

$jogo = new Jogo();
$resultado = $jogo->processarPalpite(isset($_GET['palpite']) ? $_GET['palpite'] : null);

echo "Jogo da Adivinhação do Batman\n";
echo "=============================\n";
echo "Tente adivinhar o item do Batman escolhendo um número de 1 a 3.\n";
echo "Acesse uma das opções abaixo:\n";
echo "Palpite 1: http://localhost/jogo.php?palpite=1\n";
echo "Palpite 2: http://localhost/jogo.php?palpite=2\n";
echo "Palpite 3: http://localhost/jogo.php?palpite=3\n";
echo "=============================\n";
echo $resultado['mensagem'] . "\n";
?>
