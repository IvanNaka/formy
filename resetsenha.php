<?php
    include_once 'connection.php';
    include "script_resetsenha.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="./teladelogin.css">
</head>
<body>
    <div class="page-wrapper">
            <img src="./logo_formy.jpeg">
            <div class="container-login">
                <h1>Login</h1>
                <form action="script_resetsenha.php" method="post" >
                    <div class="form">
                        <div class="email">
                            <span>E-mail:</span>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="senha">
                            <span>Nova Senha:</span>
                            <input type="password" name="senha" id="senha">
                        </div>
                        <input type="submit" value="Redefinir senha" name="resetsenha"> 
                    </div>
                </form>
            </div>
    </div>
</body>
</html>