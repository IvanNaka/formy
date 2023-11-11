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
    <?php 
    session_start();
    $_SESSION['id'] = $_GET['usuario'];
    $id = $_GET['usuario'];
    $redirect = "criar_formulario.php?usuario=$id";
    echo '<h1>Formulários</h1>';
    echo "<a href=$redirect>";
    echo '<button>Criar Formulário</button> </a>';
    ?>
</body>
</html>