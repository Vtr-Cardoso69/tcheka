<?php
$nome = $_POST['nome'];
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
        <p>O(A) participante <strong><?php echo htmlspecialchars($nome); ?></strong> foi cadastrado com sucesso!</p>
        <a href="cadastro.html">Voltar à página inicial</a>
    </div>
</body>
</html>


<style>
    
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Corpo */
body {
    font-family: "Segoe UI", sans-serif;
    background: linear-gradient(135deg, #f5f7fa, #dbefff);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

/* Container central com animação */
.container {
    background: white;
    padding: 40px 30px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
    text-align: center;
    animation: slideDownFade 0.8s ease forwards;
    opacity: 0;
    transform: translateY(-50px);
}

/* Título e texto */
.container h1 {
    color: #2c3e50;
    margin-bottom: 15px;
}

.container p {
    font-size: 18px;
    color: #34495e;
    margin-bottom: 30px;
}

/* Botão */
.container a {
    background-color: #27ae60;
    color: white;
    padding: 12px 24px;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.container a:hover {
    background-color: #1e8449;
}

/* Animação */
@keyframes slideDownFade {
    0% {
        opacity: 0;
        transform: translateY(-50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
  
    
    </style>
