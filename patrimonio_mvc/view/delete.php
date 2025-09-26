<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Bem Móvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Excluir Bem Móvel</h2>
        <div class="alert alert-warning">
            <p>Tem certeza que deseja excluir o bem móvel <strong><?php echo htmlspecialchars($bem['itens'] . ' - ' . $bem['marca']); ?></strong> da escola <strong><?php echo htmlspecialchars($bem['nome_da_escola']); ?></strong>?</p>
        </div>
        <form action="index.php?action=delete&id=<?php echo $bem['id']; ?>" method="POST">
            <button type="submit" class="btn btn-danger me-2">Sim, Excluir</button>
            <a href="index.php?action=listar" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
