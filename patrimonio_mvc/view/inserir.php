<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Bem Móvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Inserir Novo Bem Móvel</h2>
        <?php if (isset($erros) && !empty($erros)): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($erros as $erro): ?>
                        <li><?php echo $erro; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="index.php?action=salvar" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Escola</label>
                        <select class="form-select" name="id_bem_imovel">
                            <option value="">Selecione uma escola</option>
                            <?php foreach ($escolas as $escola): ?>
                                <option value="<?php echo $escola['id']; ?>"><?php echo htmlspecialchars($escola['nome_da_escola']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Item</label>
                        <select class="form-select" name="itens">
                            <option value="">Selecione um item</option>
                            <option value="Cadeiras">Cadeiras</option>
                            <option value="Carteiras">Carteiras</option>
                            <option value="Cortinas">Cortinas</option>
                            <option value="Ar Condicionado">Ar Condicionado</option>
                            <option value="Microcomputadores/Computadores">Microcomputadores/Computadores</option>
                            <option value="Roteadores">Roteadores</option>
                            <option value="Tablets">Tablets</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca" placeholder="Ex: Tramontina">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Estado do Bem</label>
                        <select class="form-select" name="estado_do_bem" id="estado_do_bem" onchange="togglePessimo()">
                            <option value="">Selecione o estado</option>
                            <option value="Ótimo">Ótimo (novo no plástico)</option>
                            <option value="Bom">Bom (novo, em uso)</option>
                            <option value="Regular">Regular (com defeitos)</option>
                            <option value="Péssimo">Péssimo (estragado)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Data de Aquisição</label>
                <input type="date" class="form-control" name="data_de_aquisicao">
            </div>
            <div id="pessimo_section" style="display: none;" class="mb-3">
                <label class="form-label">Justificativa (por que está Péssimo)</label>
                <textarea class="form-control" name="justificativa" rows="3" placeholder="Descreva o motivo do estrago..."></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-success me-md-2">Salvar</button>
                <a href="index.php?action=listar" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    <script>
        function togglePessimo() {
            const estado = document.getElementById('estado_do_bem').value;
            document.getElementById('pessimo_section').style.display = estado === 'Péssimo' ? 'block' : 'none';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>