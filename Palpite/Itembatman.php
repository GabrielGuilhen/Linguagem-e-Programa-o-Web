<?php
class ItemBatman {
    public $nome;
    public $imagem;
    public $dica;
    public $imagemBorrada;

    public function __construct($nome, $imagem, $dica, $imagemBorrada) {
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->dica = $dica;
        $this->imagemBorrada = $imagemBorrada;
    }
}
?>
