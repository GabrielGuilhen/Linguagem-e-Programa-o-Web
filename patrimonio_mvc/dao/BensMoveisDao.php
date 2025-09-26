<?php

require_once(__DIR__ . "/../util/Connection.php");

//Arquivo BensMoveisDAO.php em dao
class BensMoveisDAO {

    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function insert(BensMoveis $bensMoveis) {
        $sql = "INSERT INTO bens_moveis (nome_da_escola, itens, marca, estado_do_bem, data_de_aquisicao, id_bem_imovel) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $bensMoveis->nome_da_escola,
            $bensMoveis->itens,
            $bensMoveis->marca,
            $bensMoveis->estado_do_bem,
            $bensMoveis->data_de_aquisicao,
            $bensMoveis->id_bem_imovel
        ]);
        $id = $this->conn->lastInsertId();
        if ($bensMoveis->estado_do_bem === 'Péssimo') {
            $sql = "INSERT INTO almoxarifado_bens_permanentes (id_bem_movel, justificativa, data_transferencia) 
                    VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $id,
                $bensMoveis->justificativa,
                $bensMoveis->data_transferencia
            ]);
        }
        return $id;
    }

    public function list() {
        $sql = "SELECT * FROM bens_moveis";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $sql = "SELECT * FROM bens_moveis WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(BensMoveis $bensMoveis) {
        $sql = "UPDATE bens_moveis SET nome_da_escola = ?, itens = ?, marca = ?, estado_do_bem = ?, data_de_aquisicao = ?, id_bem_imovel = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            $bensMoveis->nome_da_escola,
            $bensMoveis->itens,
            $bensMoveis->marca,
            $bensMoveis->estado_do_bem,
            $bensMoveis->data_de_aquisicao,
            $bensMoveis->id_bem_imovel,
            $bensMoveis->id
        ]);
        if ($bensMoveis->estado_do_bem === 'Péssimo') {
            $sql = "INSERT INTO almoxarifado_bens_permanentes (id_bem_movel, justificativa, data_transferencia) 
                    VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                $bensMoveis->id,
                $bensMoveis->justificativa,
                $bensMoveis->data_transferencia
            ]);
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM bens_moveis WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }

    public function getEscolas() {
        $sql = "SELECT id, nome_da_escola FROM bens_imoveis";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}1
