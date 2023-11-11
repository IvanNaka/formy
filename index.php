<?php
    include_once 'connection.php';
    include "script_login.php";
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
    <h1>Faça logins</h1>
    <form action="script_login.php" method="post" >
        <div class="form">
            <div class="email">
                <span>Email:</span>
                <input type="text" name="email" id="email">
            </div>
            <div class="senha">
                <span>Senha:</span>
                <input type="password" name="senha" id="senha">
            </div>
            <input type="submit" value="Enviar" name="login"> 
        </div>
    </form>
    <a href="cadastro.php">
            <button>Faça o cadastro</button>
    </a>
    <script src="scripts.js"></script>
</body>
</html>