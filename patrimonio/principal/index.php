<!DOCTYPE html>
<html lang="pt-BR">
<head><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão de Bens Móveis</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Atualiza campo marca conforme tipo
        function updateMarcaField() {
            const tipo = document.getElementById('tipo_bem').value;
            const marcaSelect = document.getElementById('marca_select');
            const marcaInput = document.getElementById('marca_input');
            
            if (tipo === 'Cadeira' || tipo === 'Carteira' || tipo === 'Cortina') {
                marcaSelect.classList.add('hidden');
                marcaInput.classList.remove('hidden');
                marcaInput.value = 'Não possui';
                marcaInput.readOnly = true;
            } else if (tipo === 'Ar-condicionado') {
                marcaSelect.classList.remove('hidden');
                marcaInput.classList.add('hidden');
                marcaSelect.value = '';
            } else {
                marcaSelect.classList.add('hidden');
                marcaInput.classList.remove('hidden');
                marcaInput.value = '';
                marcaInput.readOnly = false;
            }
        }

        // Completa barras automaticamente na data
        document.addEventListener('DOMContentLoaded', function() {
            const dataInput = document.querySelector('input[name="data_aquisicao"]');
            if (dataInput) {
                dataInput.addEventListener('input', function(e) {
                    let v = dataInput.value.replace(/\D/g, '').slice(0,8);
                    if (v.length >= 5)
                        dataInput.value = v.replace(/(\d{2})(\d{2})(\d{1,4})/, '$1/$2/$3');
                    else if (v.length >= 3)
                        dataInput.value = v.replace(/(\d{2})(\d{1,2})/, '$1/$2');
                    else
                        dataInput.value = v;
                });
            }
        });
    </script>
</head>
<body class="bg-gray-100 font-sans">
    <img src="image.png" alt="Brasão de Foz do Iguaçu" class="absolute top-6 left-6 w-24 h-auto z-10">
    <div class="container mx-auto p-6 pl-36">
        <h1 class="text-3xl font-bold text-center mb-6">Diretoria de Patrimônio - Divisão de Bens Móveis</h1>
        <!-- Formulário de Cadastro -->
        <form action="processa.php" method="POST" class="bg-white p-6 rounded-lg shadow-md mb-6">
            <div class="mb-4">
                <label class="block text-gray-700">Tipo:</label>
                <select id="tipo_bem" name="tipo_bem" onchange="updateMarcaField()" class="w-full p-2 border rounded" >
                    <option value="">Selecione</option>
                    <option value="Cadeira">Cadeira</option>
                    <option value="Carteira">Carteira</option>
                    <option value="Cortina">Cortina</option>
                    <option value="Ar-condicionado">Ar-condicionado</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Marca:</label>
                <select id="marca_select" name="marca" class="w-full p-2 border rounded hidden">
                    <option value="">Selecione</option>
                    <option value="LG">LG</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Consul">Consul</option>
                    <option value="Electrolux">Electrolux</option>
                    <option value="Midea">Midea</option>
                </select>
                <input type="text" id="marca_input" name="marca" class="w-full p-2 border rounded" >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Localização (Escola/CMEI):</label>
                <select name="localizacao" class="w-full p-2 border rounded" >
                    <!-- opções de localização -->
                    <option value="">Selecione</option>
                    <option value="Escola Municipal Zizo">Escola Municipal Zizo</option>
                    <option value="Escola Municipal Ademar Marques">Escola Municipal Ademar Marques</option>
                    <option value="Escola Municipal Adele Zanotto">Escola Municipal Adele Zanotto</option>
                    <option value="Escola Municipal Acácio Pedroso">Escola Municipal Acácio Pedroso</option>
                    <option value="CMEI Zilda Arns">CMEI Zilda Arns</option>
                    <option value="CMEI Vila Esmeralda">CMEI Vila Esmeralda</option>
                    <option value="CMEI Victório Basso">CMEI Victório Basso</option>
                    <option value="CMEI Três Lagoas">CMEI Três Lagoas</option>
                    <option value="CMEI Soldadinho">CMEI Soldadinho</option>
                    <option value="CMEI São Francisco">CMEI São Francisco</option>
                    <option value="CMEI Rubem Alves">CMEI Rubem Alves</option>
                    <option value="CMEI Rosacirilo de Castro">CMEI Rosacirilo de Castro</option>
                    <option value="CMEI Ramona Rodrigues Dotto">CMEI Ramona Rodrigues Dotto</option>
                    <option value="CMEI Prof. Vanderli B. Moreira">CMEI Prof. Vanderli B. Moreira</option>
                    <option value="CMEI Prof. Simone Walquiria">CMEI Prof. Simone Walquiria</option>
                    <option value="CMEI Prof. Onira">CMEI Prof. Onira</option>
                    <option value="CMEI Prof. Anilva de Jesus">CMEI Prof. Anilva de Jesus</option>
                    <option value="CMEI Nidia Benitez">CMEI Nidia Benitez</option>
                    <option value="CMEI Heley de Abreu">CMEI Heley de Abreu</option>
                    <option value="CMEI Pingo de Gente">CMEI Pingo de Gente</option>
                    <option value="CMEI Ozíres Santos">CMEI Ozíres Santos</option>
                    <option value="CMEI Ouro Verde">CMEI Ouro Verde</option>
                    <option value="CMEI Goch">CMEI Goch</option>
                    <option value="CMEI Novo Horizonte">CMEI Novo Horizonte</option>
                    <option value="CMEI Dona Brida">CMEI Dona Brida</option>
                    <option value="CMEI Maricota Basso">CMEI Maricota Basso</option>
                    <option value="Escola Municipal Cândido Portinari">Escola Municipal Cândido Portinari</option>
                    <option value="Escola Municipal Carlos Gomes">Escola Municipal Carlos Gomes</option>
                    <option value="Escola Municipal Duque de Caxias">Escola Municipal Duque de Caxias</option>
                    <option value="Escola Municipal Arnaldo Isidoro">Escola Municipal Arnaldo Isidoro</option>
                    <option value="Escola Municipal João XXIII">Escola Municipal João XXIII</option>
                    <option value="Escola Municipal Eloi Lohmann">Escola Municipal Eloi Lohmann</option>
                    <option value="Escola Municipal Josinete Holler">Escola Municipal Josinete Holler</option>
                    <option value="Escola Municipal Altair Ferrais da Silva">Escola Municipal Altair Ferrais da Silva</option>
                    <option value="Escola Municipal Brigadeiro Antônio Sampaio">Escola Municipal Brigadeiro Antônio Sampaio</option>
                    
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Estado:</label>
                <select name="estado" class="w-full p-2 border rounded" >
                    <option value="">Selecione</option>
                    <option value="Ótimo">Ótimo (no plástico)</option>
                    <option value="Bom">Bom (novo, porem fora do plástico)</option>
                    <option value="Regular">Regular (contem marcas de uso)</option>
                    <option value="Ruim">Ruim (funciona, mas com muitas marcas/defeitos)</option>
                    <option value="Péssimo">Péssimo (perda total)</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Data de Aquisição (DD/MM/YYYY):</label>
                <input type="text" name="data_aquisicao" class="w-full p-2 border rounded" placeholder="DD/MM/YYYY" >
            </div>
            <button type="submit" name="acao" value="Cadastrar" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Cadastrar</button>
        </form>

        <?php if (isset($_GET['mensagem'])): ?>
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4"><?php echo htmlspecialchars($_GET['mensagem']); ?></div>
        <?php elseif (isset($_GET['erro'])): ?>
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4"><?php echo htmlspecialchars($_GET['erro']); ?></div>
        <?php endif; ?>

        <h2 class="text-2xl font-semibold mb-4">Itens Cadastrados</h2>
        <table class="w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Tipo</th>
                    <th class="p-3 text-left">Marca</th>
                    <th class="p-3 text-left">Localização</th>
                    <th class="p-3 text-left">Estado</th>
                    <th class="p-3 text-left">Data de Aquisição</th>
                    <th class="p-3 text-left">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                require_once "conexao.php";
                $pdo = Conexao::getConexao();
                $stmt = $pdo->query("SELECT * FROM bens_moveis");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td class='p-3'>{$row['id']}</td>";
                    echo "<td class='p-3'>{$row['tipo_bem']}</td>";
                    echo "<td class='p-3'>{$row['marca']}</td>";
                    echo "<td class='p-3'>{$row['localizacao']}</td>";
                    echo "<td class='p-3'>{$row['estado']}</td>";
                    echo "<td class='p-3'>" . date('d/m/Y', strtotime($row['data_aquisicao'])) . "</td>";
                    echo "<td class='p-3'><a href='processa.php?acao=excluir&id={$row['id']}' class='text-red-500 hover:underline' onclick='return confirm(\"Deseja excluir?\")'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="cards.php" class="text-blue-500 hover:underline mb-4 inline-block">Visualizar em Cards</a>
    </div>
</body>
</html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão de Bens Móveis</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Atualiza campo marca conforme tipo
        function updateMarcaField() {
            const tipo = document.getElementById('tipo_bem').value;
            const marcaSelect = document.getElementById('marca_select');
            const marcaInput = document.getElementById('marca_input');
            
            if (tipo === 'Cadeira' || tipo === 'Carteira' || tipo === 'Cortina') {
                marcaSelect.classList.add('hidden');
                marcaInput.classList.remove('hidden');
                marcaInput.value = 'Não possui';
                marcaInput.readOnly = true;
            } else if (tipo === 'Ar-condicionado') {
                marcaSelect.classList.remove('hidden');
                marcaInput.classList.add('hidden');
                marcaSelect.value = '';
            } else {
                marcaSelect.classList.add('hidden');
                marcaInput.classList.remove('hidden');
                marcaInput.value = '';
                marcaInput.readOnly = false;
            }
        }

        // Completa barras automaticamente na data
        document.addEventListener('DOMContentLoaded', function() {
            const dataInput = document.querySelector('input[name="data_aquisicao"]');
            if (dataInput) {
                dataInput.addEventListener('input', function(e) {
                    let v = dataInput.value.replace(/\D/g, '').slice(0,8);
                    if (v.length >= 5)
                        dataInput.value = v.replace(/(\d{2})(\d{2})(\d{1,4})/, '$1/$2/$3');
                    else if (v.length >= 3)
                        dataInput.value = v.replace(/(\d{2})(\d{1,2})/, '$1/$2');
                    else
                        dataInput.value = v;
                });
            }
        });
    </script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Divisão de Bens Móveis</h1>
        <!-- Formulário de Cadastro -->
        <form action="processa.php" method="POST" class="bg-white p-6 rounded-lg shadow-md mb-6">
            <div class="mb-4">
                <label class="block text-gray-700">Tipo:</label>
                <select id="tipo_bem" name="tipo_bem" onchange="updateMarcaField()" class="w-full p-2 border rounded" >
                    <option value="">Selecione</option>
                    <option value="Cadeira">Cadeira</option>
                    <option value="Carteira">Carteira</option>
                    <option value="Cortina">Cortina</option>
                    <option value="Ar-condicionado">Ar-condicionado</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Marca:</label>
                <select id="marca_select" name="marca" class="w-full p-2 border rounded hidden">
                    <option value="">Selecione</option>
                    <option value="LG">LG</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Consul">Consul</option>
                    <option value="Electrolux">Electrolux</option>
                    <option value="Midea">Midea</option>
                </select>
                <input type="text" id="marca_input" name="marca" class="w-full p-2 border rounded" >
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Localização (Escola/CMEI):</label>
                <select name="localizacao" class="w-full p-2 border rounded" >
                    <!-- opções de localização -->
                    <option value="">Selecione</option>
                    <option value="Escola Municipal Zizo">Escola Municipal Zizo</option>
                    <option value="Escola Municipal Ademar Marques">Escola Municipal Ademar Marques</option>
                    <option value="Escola Municipal Adele Zanotto">Escola Municipal Adele Zanotto</option>
                    <option value="Escola Municipal Acácio Pedroso">Escola Municipal Acácio Pedroso</option>
                    <option value="CMEI Zilda Arns">CMEI Zilda Arns</option>
                    <option value="CMEI Vila Esmeralda">CMEI Vila Esmeralda</option>
                    <option value="CMEI Victório Basso">CMEI Victório Basso</option>
                    <option value="CMEI Três Lagoas">CMEI Três Lagoas</option>
                    <option value="CMEI Soldadinho">CMEI Soldadinho</option>
                    <option value="CMEI São Francisco">CMEI São Francisco</option>
                    <option value="CMEI Rubem Alves">CMEI Rubem Alves</option>
                    <option value="CMEI Rosacirilo de Castro">CMEI Rosacirilo de Castro</option>
                    <option value="CMEI Ramona Rodrigues Dotto">CMEI Ramona Rodrigues Dotto</option>
                    <option value="CMEI Prof. Vanderli B. Moreira">CMEI Prof. Vanderli B. Moreira</option>
                    <option value="CMEI Prof. Simone Walquiria">CMEI Prof. Simone Walquiria</option>
                    <option value="CMEI Prof. Onira">CMEI Prof. Onira</option>
                    <option value="CMEI Prof. Anilva de Jesus">CMEI Prof. Anilva de Jesus</option>
                    <option value="CMEI Nidia Benitez">CMEI Nidia Benitez</option>
                    <option value="CMEI Heley de Abreu">CMEI Heley de Abreu</option>
                    <option value="CMEI Pingo de Gente">CMEI Pingo de Gente</option>
                    <option value="CMEI Ozíres Santos">CMEI Ozíres Santos</option>
                    <option value="CMEI Ouro Verde">CMEI Ouro Verde</option>
                    <option value="CMEI Goch">CMEI Goch</option>
                    <option value="CMEI Novo Horizonte">CMEI Novo Horizonte</option>
                    <option value="CMEI Dona Brida">CMEI Dona Brida</option>
                    <option value="CMEI Maricota Basso">CMEI Maricota Basso</option>
                    <option value="Escola Municipal Cândido Portinari">Escola Municipal Cândido Portinari</option>
                    <option value="Escola Municipal Carlos Gomes">Escola Municipal Carlos Gomes</option>
                    <option value="Escola Municipal Duque de Caxias">Escola Municipal Duque de Caxias</option>
                    <option value="Escola Municipal Arnaldo Isidoro">Escola Municipal Arnaldo Isidoro</option>
                    <option value="Escola Municipal João XXIII">Escola Municipal João XXIII</option>
                    <option value="Escola Municipal Eloi Lohmann">Escola Municipal Eloi Lohmann</option>
                    <option value="Escola Municipal Josinete Holler">Escola Municipal Josinete Holler</option>
                    <option value="Escola Municipal Altair Ferrais da Silva">Escola Municipal Altair Ferrais da Silva</option>
                    <option value="Escola Municipal Brigadeiro Antônio Sampaio">Escola Municipal Brigadeiro Antônio Sampaio</option>
                    
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Estado:</label>
                <select name="estado" class="w-full p-2 border rounded" >
                    <option value="">Selecione</option>
                    <option value="Ótimo">Ótimo (no plástico)</option>
                    <option value="Bom">Bom (novo, porem fora do plástico)</option>
                    <option value="Regular">Regular (contem marcas de uso)</option>
                    <option value="Ruim">Ruim (funciona, mas com muitas marcas/defeitos)</option>
                    <option value="Péssimo">Péssimo (perda total)</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Data de Aquisição (DD/MM/YYYY):</label>
                <input type="text" name="data_aquisicao" class="w-full p-2 border rounded" placeholder="DD/MM/YYYY" >
            </div>
            <button type="submit" name="acao" value="Cadastrar" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Cadastrar</button>
        </form>

        <?php if (isset($_GET['mensagem'])): ?>
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4"><?php echo htmlspecialchars($_GET['mensagem']); ?></div>
        <?php elseif (isset($_GET['erro'])): ?>
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4"><?php echo htmlspecialchars($_GET['erro']); ?></div>
        <?php endif; ?>

        <h2 class="text-2xl font-semibold mb-4">Itens Cadastrados</h2>
        <table class="w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Tipo</th>
                    <th class="p-3 text-left">Marca</th>
                    <th class="p-3 text-left">Localização</th>
                    <th class="p-3 text-left">Estado</th>
                    <th class="p-3 text-left">Data de Aquisição</th>
                    <th class="p-3 text-left">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                require_once "conexao.php";
                $pdo = Conexao::getConexao();
                $stmt = $pdo->query("SELECT * FROM bens_moveis");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td class='p-3'>{$row['id']}</td>";
                    echo "<td class='p-3'>{$row['tipo_bem']}</td>";
                    echo "<td class='p-3'>{$row['marca']}</td>";
                    echo "<td class='p-3'>{$row['localizacao']}</td>";
                    echo "<td class='p-3'>{$row['estado']}</td>";
                    echo "<td class='p-3'>" . date('d/m/Y', strtotime($row['data_aquisicao'])) . "</td>";
                    echo "<td class='p-3'><a href='processa.php?acao=excluir&id={$row['id']}' class='text-red-500 hover:underline' onclick='return confirm(\"Deseja excluir?\")'>Excluir</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="cards.php" class="text-blue-500 hover:underline mb-4 inline-block">Visualizar em Cards</a>
    </div>
</body>
</html>
