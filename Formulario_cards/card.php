<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $poster = htmlspecialchars($_POST['poster']);
    $description = htmlspecialchars($_POST['description']);
} else {
    
    header("Location: formulario.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card de Filme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Seu Card de Filme</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-secondary text-white shadow-lg">
                    <img src="<?php echo $poster; ?>" class="card-img-top" alt="Pôster do Filme" style="height: 400px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title; ?></h5>
                        <p class="card-text"><?php echo $description; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="formulario.php" class="btn btn-outline-light">Criar Outro Card</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
