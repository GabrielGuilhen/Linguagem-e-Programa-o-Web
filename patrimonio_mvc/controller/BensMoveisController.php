<?php
require_once '../service/BensMoveisService.php';

$service = new BensMoveisService();
$action = $_GET['action'] ?? 'listar';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'listar':
        $bens_moveis = $service->list();
        require '../view/listar.php';
        break;
    case 'inserir':
        $escolas = $service->getEscolas();
        require '../view/inserir.php';
        break;
    case 'salvar':
        $bensMoveis = new BensMoveis();
        $bensMoveis->nome_da_escola = $_POST['nome_da_escola'];
        $bensMoveis->itens = $_POST['itens'];
        $bensMoveis->marca = $_POST['marca'];
        $bensMoveis->estado_do_bem = $_POST['estado_do_bem'];
        $bensMoveis->data_de_aquisicao = $_POST['data_de_aquisicao'];
        $bensMoveis->id_bem_imovel = $_POST['id_bem_imovel'];
        $bensMoveis->justificativa = $_POST['justificativa'] ?? '';
        $bensMoveis->data_transferencia = $_POST['data_transferencia'] ?? '';

        $erros = $service->save($bensMoveis);
        if ($erros) {
            echo "Erros: " . implode(', ', $erros);
            // Redirecionar ou mostrar erros na view
        } else {
            header('Location: index.php?action=listar');
        }
        break;
    case 'update':
        $bem = $service->findById($id);
        $escolas = $service->getEscolas();
        require '../view/update.php';
        break;
    case 'salvar_update':
        $bensMoveis = new BensMoveis();
        $bensMoveis->id = $id;
        $bensMoveis->nome_da_escola = $_POST['nome_da_escola'];
        $bensMoveis->itens = $_POST['itens'];
        $bensMoveis->marca = $_POST['marca'];
        $bensMoveis->estado_do_bem = $_POST['estado_do_bem'];
        $bensMoveis->data_de_aquisicao = $_POST['data_de_aquisicao'];
        $bensMoveis->id_bem_imovel = $_POST['id_bem_imovel'];
        $bensMoveis->justificativa = $_POST['justificativa'] ?? '';
        $bensMoveis->data_transferencia = $_POST['data_transferencia'] ?? '';

        $erros = $service->save($bensMoveis);
        if ($erros) {
            echo "Erros: " . implode(', ', $erros);
        } else {
            header('Location: index.php?action=listar');
        }
        break;
        case 'delete':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $service->delete($id);
            header('Location: index.php?action=listar');
        } else {
            $bem = $service->findById($id);
            require '../view/delete.php';
        }
        break;
}
?>
