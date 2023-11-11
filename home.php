<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Formulários</h1>
    <?php 
    session_start();
    $_SESSION['id'] = $_GET['usuario'];
    ?>
</body>
</html>