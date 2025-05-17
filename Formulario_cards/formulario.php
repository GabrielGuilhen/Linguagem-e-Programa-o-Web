<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Card de Filme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Criar Card de Filme</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="card.php" method="POST" class="card p-4 shadow-sm">
                    <div class="mb-3">
                        <label for="title" class="form-label">Título do Filme</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">URL da Imagem</label>
                        <input type="url" class="form-control" id="poster" name="poster" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição Curta</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Gerar Card</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
