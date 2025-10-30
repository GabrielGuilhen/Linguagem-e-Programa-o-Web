<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

$mensagem = '';
$tipo_mensagem = '';

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    
    switch ($acao) {
        case 'criar':
            if (isset($_SESSION['contador'])) {
                $mensagem = 'Erro: Sessão já existe! Use "Incrementar" para alterar o valor.';
                $tipo_mensagem = 'danger';
            } else {
                $_SESSION['contador'] = 0;
                $mensagem = 'Sessão criada com sucesso! Valor inicial: 0';
                $tipo_mensagem = 'success';
            }
            break;
            
        case 'incrementar':
            if (!isset($_SESSION['contador'])) {
                $mensagem = 'Erro: Sessão não existe! Crie uma sessão primeiro.';
                $tipo_mensagem = 'danger';
            } else {
                $_SESSION['contador']++;
                $mensagem = 'Valor incrementado com sucesso! Novo valor: ' . $_SESSION['contador'];
                $tipo_mensagem = 'success';
            }
            break;
            
        case 'remover':
            if (isset($_SESSION['contador'])) {
                session_unset();
                session_destroy();
                $mensagem = 'Sessão removida com sucesso!';
                $tipo_mensagem = 'success';
            } else {
                $mensagem = 'Erro: Não há sessão para remover.';
                $tipo_mensagem = 'danger';
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador utilizando sessão</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #121212;
        }
        .container {
            max-width: 600px;
        }
        .title {
            text-align: center;
            margin-bottom: 30px;
            color: #ffffff;
        }
        .btn-group {
            justify-content: center;
            margin-bottom: 30px;
        }
        .btn-success {
            background-color: #198754;
            border-color: #198754;
        }
        .btn-success:hover {
            background-color: #157347;
            border-color: #146c43;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #bb2d3b;
            border-color: #b02a37;
        }
        .contador {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.5);
            margin-top: 20px;
            color: #ffffff;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="title">Contador utilizando sessão</h1>
        
        <?php if (!empty($mensagem)): ?>
            <div class="alert alert-<?php echo $tipo_mensagem === 'success' ? 'success' : 'danger'; ?> alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($mensagem); ?>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <div class="btn-group" role="group">
            <a href="?acao=criar" class="btn btn-success btn-lg">Criar número sessão</a>
            <a href="?acao=incrementar" class="btn btn-primary btn-lg">Incrementar número sessão</a>
            <a href="?acao=remover" class="btn btn-danger btn-lg">Remover sessão</a>
        </div>
        
        <div class="contador">
            <?php
            if (isset($_SESSION['contador'])) {
                echo 'Contador: ' . $_SESSION['contador'];
            } else {
                echo 'Contador: Sessão não existe!';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
