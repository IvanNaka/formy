<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
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
    <div class="page-wrapper">
            <div class="container-login">
                <form action="script_cadastroform.php" method="post" >
                    <div class="form">
                        <div class="titulo">
                            <span>Titulo do formulário:</span>
                            <input type="text" name="titulo" id="titulo" required>
                        </div>
                        <div class="pergunta">
                            <span>Digite aqui sua pergunta:</span>
                            <input type="text" name="pergunta" id="pergunta" required >
                        </div>
                        <div class="resposta">
                            <span>Digite aqui a resposta:</span>
                            <input type="text" name="resposta" id="resposta" required >
                        </div>
                        <?php 
                        echo    "<input type='hidden' id='usuario' name='usuario' value='$id'>";
                        ?>
                    </div>
                    <input type="submit" value="Concluir Formulário" name="salvar_form"> 
                </div>
                </form>
                <script src="scripts.js"></script>
            </div>
        </div>
</body>
</html>