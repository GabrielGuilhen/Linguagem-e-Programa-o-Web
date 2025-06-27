<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão de Bens Móveis - Visualização em Cards</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Tem certeza?',
                text: 'Você deseja realmente excluir este bem móvel?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'processa.php?acao=excluir&id=' + id;
                }
            });
        }
    </script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Divisão de Bens Móveis - Visualização em Cards</h1>
        <a href="index.php" class="text-blue-500 hover:underline mb-4 inline-block">Voltar para Listagem em Tabela</a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            require_once '../dao/BemMovelDao.php';
            require_once 'conexao.php';
            $pdo = Conexao::getConexao();
            $dao = new ItemPatrimonioDAO($pdo);
            $itens = $dao->getAll();
            foreach ($itens as $bem) {
                echo "<div class='bg-white p-6 rounded-lg shadow-md'>";
                echo "<h3 class='text-xl font-semibold mb-2'>{$bem->getTipoBem()}</h3>";
                echo "<p><strong>ID:</strong> {$bem->getId()}</p>";
                echo "<p><strong>Marca:</strong> {$bem->getMarca()}</p>";
                echo "<p><strong>Localização:</strong> {$bem->getLocalizacao()}</p>";
                echo "<p><strong>Estado:</strong> {$bem->getEstado()}</p>";
                echo "<p><strong>Data de Aquisição:</strong> " . date('d/m/Y', strtotime($bem->getDataAquisicao())) . "</p>";
                echo "<a href='#' onclick='confirmDelete({$bem->getId()})' class='text-red-500 hover:underline mt-4 inline-block'>Excluir</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
