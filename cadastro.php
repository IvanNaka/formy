<?php
    include_once 'connection.php';
    include "script_cadastro.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="./cadastro.css">
    </head>
<body>
    <h1>Cadastro</h1>
    <form action="script_cadastro.php" method="post" >
        <div class="form">
            <div class="nome">
                <span>Nome:</span>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="email">
                <span>Email:</span>
                <input type="text" name="email" id="email">
            </div>
            <div class="cpf">
                <span>CPF:</span>
                <input type="text" name="cpf" id="cpf" >
            </div>
            <div class="senha">
                <span>Senha:</span>
                <input type="password" name="senha" id="senha">
            </div>
            <input type="submit" value="Enviar" name="cadastro"> 
        </div>
    </form>
    <script src="scripts.js"></script>
</body>
</html>