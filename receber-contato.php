
<?php
$nome = $_POST['nome'];
echo "O e-mail de '$nome' foi enviado com sucesso!";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Concluído</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro Realizado</h1>
        <p>O participante <strong><?php echo htmlspecialchars($nome); ?></strong> foi cadastrado com sucesso!</p>
        <a href="index.html" style="display:inline-block; margin-top:20px; color:#2980b9;">Voltar à página inicial</a>
    </div>
</body>
</html>

<style>
    
    .container p {
    font-size: 18px;
    color: #2c3e50;
    text-align: center;
}

.container a {
    text-decoration: none;
    font-weight: bold;
}

    
    
    
    
    </style>
