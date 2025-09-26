<?php

require_once(__DIR__ . "/../dao/BensMoveisDAO.php");

//Arquivo BensMoveisService.php em service
class BensMoveisService {

    private $bensMoveisDAO;

    public function __construct() {
        $this->bensMoveisDAO = new BensMoveisDAO();
    }

    public function list() {
        return $this->bensMoveisDAO->list();
    }

    public function findById($id) {
        return $this->bensMoveisDAO->findById($id);
    }

    public function save(BensMoveis $bensMoveis) {
        $erros = $this->getErros($bensMoveis);
        if ($erros) {
            return $erros;
        }

        if ($bensMoveis->id) {
            $this->bensMoveisDAO->update($bensMoveis);
        } else {
            $this->bensMoveisDAO->insert($bensMoveis);
        }
        return false;
    }

    public function delete($id) {
        $this->bensMoveisDAO->delete($id);
    }

    public function getEscolas() {
        return $this->bensMoveisDAO->getEscolas();
    }

    private function getErros($bensMoveis) {
        $erros = [];
        if (!$bensMoveis->nome_da_escola) $erros[] = "Nome da escola obrigatório.";
        if (!$bensMoveis->itens) $erros[] = "Item obrigatório.";
        if (!$bensMoveis->marca) $erros[] = "Marca obrigatória.";
        if (!$bensMoveis->estado_do_bem) $erros[] = "Estado obrigatório.";
        if (!$bensMoveis->data_de_aquisicao) $erros[] = "Data de aquisição obrigatória.";
        if ($bensMoveis->estado_do_bem === 'Péssimo' && !$bensMoveis->justificativa) $erros[] = "Justificativa obrigatória para Péssimo.";
        return $erros;
    }
}
