<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Bens Móveis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Lista de Bens Móveis</h2>
        <a href="index.php?action=inserir" class="btn btn-primary mb-3">Novo Bem Móvel</a>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Escola</th>
                    <th>Item</th>
                    <th>Marca</th>
                    <th>Estado</th>
                    <th>Data de Aquisição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($bens_moveis)): ?>
                    <tr>
                        <td colspan="7" class="text-center">Nenhum bem cadastrado.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($bens_moveis as $bem): ?>
                        <tr>
                            <td><?php echo $bem['id']; ?></td>
                            <td><?php echo htmlspecialchars($bem['nome_da_escola']); ?></td>
                            <td><?php echo htmlspecialchars($bem['itens']); ?></td>
                            <td><?php echo htmlspecialchars($bem['marca']); ?></td>
                            <td><span class="badge bg-<?php echo $bem['estado_do_bem'] === 'Ótimo' ? 'success' : ($bem['estado_do_bem'] === 'Bom' ? 'info' : ($bem['estado_do_bem'] === 'Regular' ? 'warning' : 'danger')); ?>"><?php echo $bem['estado_do_bem']; ?></span></td>
                            <td><?php echo $bem['data_de_aquisicao']; ?></td>
                            <td>
                                <a href="index.php?action=update&id=<?php echo $bem['id']; ?>" class="btn btn-warning btn-sm me-1">Editar</a>
                                <a href="index.php?action=delete&id=<?php echo $bem['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirmar exclusão?')">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>