<?php
require_once 'ItemBatman.php';

class Jogo {
    private $itens;
    private $itemCorreto;

    public function __construct() {
        $this->itens = [
            1 => new ItemBatman(
                "Batarangue",
                "https://via.placeholder.com/300x200?text=Batarangue",
                "Uma arma afiada que voa de volta ao dono!",
                "https://via.placeholder.com/300x200?text=Batarangue&blur=50"
            ),
            2 => new ItemBatman(
                "Cinto de Utilidades",
                "https://via.placeholder.com/300x200?text=Cinto",
                "Contém ferramentas para qualquer situação!",
                "https://via.placeholder.com/300x200?text=Cinto&blur=50"
            ),
            3 => new ItemBatman(
                "Bat-Sinal",
                "https://via.placeholder.com/300x200?text=Bat-Sinal",
                "Ilumina os céus de Gotham!",
                "https://via.placeholder.com/300x200?text=Bat-Sinal&blur=50"
            )
        ];
        $this->itemCorreto = $this->itens[array_rand($this->itens)];
    }

    public function processarPalpite($palpite) {
        if (!isset($palpite)) {
            return [
                'status' => 'erro',
                'mensagem' => 'Erro: Parâmetro palpite não informado! Use: http://localhost/jogo.php?palpite=1'
            ];
        }

        if (!isset($this->itens[$palpite])) {
            return [
                'status' => 'erro',
                'mensagem' => 'Erro: Palpite inválido! Escolha 1, 2 ou 3. Exemplo: http://localhost/jogo.php?palpite=1'
            ];
        }

        $itemSelecionado = $this->itens[$palpite];
        if ($itemSelecionado === $this->itemCorreto) {
            return [
                'status' => 'sucesso',
                'mensagem' => "Parabéns! Você acertou!\nItem: {$itemSelecionado->nome}\nImagem: {$itemSelecionado->imagem}"
            ];
        } else {
            return [
                'status' => 'errado',
                'mensagem' => "Palpite errado!\nDica: {$this->itemCorreto->dica}\nImagem borrada: {$this->itemCorreto->imagemBorrada}"
            ];
        }
    }
}
?>
