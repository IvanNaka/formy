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
    <div class="page-wrapper">
            <div class="container-login">
                <h1>Cadastro</h1>
                <form action="script_cadastro.php" method="post" >
                    <div class="form">
                        <div class="Nome">
                            <span>Nome Completo:</span>
                            <input type="text" name="Nome" id="Nome" required>
                        </div>
                        <div class="cpf">
                            <span>CPF:</span>
                            <input type="text" name="cpf" id="cpf" required >
                        </div>
                        <div class="email">
                            <span>E-mail:</span>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="senha">
                            <span>Senha:</span>
                            <input type="password" name="senha" id="senha" required>
                        </div>
                    </div>
                    <input type="submit" value="Cadastrar" name="cadastro" required> 
                </div>
                </form>
                <script src="scripts.js"></script>
            </div>
        </div>
</body>
</html>
