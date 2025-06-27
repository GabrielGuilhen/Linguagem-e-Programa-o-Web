<?php
require_once "model/BemMovel.php";
require_once "conexao.php";


class ItemPatrimonioDAO {
    private $pdo;


    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    
    public function insert($item) {
        $stmt = $this->pdo->prepare("INSERT INTO bens_moveis (tipo_bem, marca, localizacao, estado, data_aquisicao) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([
            $item->getTipo(),
            $item->getMarca(),
            $item->getLocalizacao(),
            $item->getEstado(),
            $item->getDataAquisicao()
        ]);
    }

    // Buscar todos os itens
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM bens_moveis");
        $itens = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $itens[] = new ItemPatrimonio(
                $row['id'],
                $row['tipo_bem'],
                $row['marca'],
                $row['localizacao'],
                $row['estado'],
                $row['data_aquisicao']
            );
        }
        return $itens;
    }

    // Excluir item
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM bens_moveis WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>