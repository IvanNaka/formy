<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Já possui algum cadastro?</h1>
    <h1>Faça login</h1>
    <form action="index.php" method="post" name="cadastro">
        <div class="form">
            <div class="nome">
                <span>Nome:</span>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="cpf">
                <span>CPF:</span>
                <input type="text" name="cpf" id="cpf" oninput="maskCPF(this)">
            </div>
            <div class="email">
                <span>Email:</span>
                <input type="text" name="email" id="email">
            </div>
            <div class="senha">
                <span>Senha:</span>
                <input type="password" name="senha" id="senha">
            </div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    
    <?php include "functions.php";?>

    <script>include 'scripts.js'</script>
</body>
</html>