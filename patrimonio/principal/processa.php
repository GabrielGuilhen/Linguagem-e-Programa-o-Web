<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "conexao.php";
$pdo = Conexao::getConexao();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'Cadastrar') {
    // Validação dos campos obrigatórios
    $campos = ['tipo_bem', 'marca', 'localizacao', 'estado', 'data_aquisicao'];
    $erros = [];

    foreach ($campos as $campo) {
        if (empty($_POST[$campo])) {
            $erros[] = "O campo $campo é obrigatório.";
        }
    }

    // Validação dos dados
    $tipo = $_POST['tipo_bem'];
    $marca = $_POST['marca'];
    $localizacao = $_POST['localizacao'];
    $estado = $_POST['estado'];
    $dataAquisicao = trim($_POST['data_aquisicao']); // <-- trim aqui

    // Validação do formato da data (DD/MM/YYYY)
    $datePattern = '/^\d{2}\/\d{2}\/\d{4}$/';
    if (!preg_match($datePattern, $dataAquisicao)) {
        $erros[] = "Data de aquisição deve estar no formato 00/00/0000.";
    } else {
        $dateParts = explode('/', $dataAquisicao);
        if (!checkdate($dateParts[1], $dateParts[0], $dateParts[2])) {
            $erros[] = "Data de aquisição inválida.";
        } else {
            $dataAquisicao = "{$dateParts[2]}-{$dateParts[1]}-{$dateParts[0]}";
        }
    }

    // Validação da marca
    if (in_array($tipo, ['Cadeira', 'Carteira', 'Cortina']) && $marca !== 'Não possui') {
        $erros[] = "Para $tipo, a marca deve ser 'Não possui'.";
    }
    if (strlen($marca) > 50) {
        $erros[] = "A marca deve ter no máximo 50 caracteres.";
    }

    // Inserir no banco se não houver erros
    if (empty($erros)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO bens_moveis (tipo_bem, marca, localizacao, estado, data_aquisicao) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$tipo, $marca, $localizacao, $estado, $dataAquisicao]);
            header("Location: index.php?mensagem=Item cadastrado com sucesso!");
            exit;
        } catch (PDOException $e) {
            header("Location: index.php?erro=Erro ao cadastrar: " . $e->getMessage());
            exit;
        }
    } else {
        header("Location: index.php?erro=" . urlencode(implode(" ", $erros)));
        exit;
    }
}

// Exclusão
if (isset($_GET['acao']) && $_GET['acao'] === 'excluir' && isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM bens_moveis WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        header("Location: index.php?mensagem=Item excluído com sucesso!");
        exit;
    } catch (PDOException $e) {
        header("Location: index.php?erro=Erro ao excluir: " . $e->getMessage());
        exit;
    }
}
?>