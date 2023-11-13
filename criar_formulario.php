<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Formulario</title>
    <link rel="stylesheet" href="criar_formulario.css">

</head>
<body>

<main>
        <header>
            <div class="container">
                <img src="./logo_formy.jpeg" class="logo">
                
                <div class="right">
                    <ul>
                    <?php	
                            $id = $_GET['usuario'];
                            $redirect = "home.php?usuario=$id";
                            echo "
                            <li>
                                <a href=$redirect>Home</a>
                            </li>";
                            ?>
                            <?php	
                            $id = $_GET['usuario'];
                            $redirect = "criar_formulario.php?usuario=$id";
                            echo "
                            <li>
                                <a href=$redirect>Criar Formulario</a>
                            </li>";
                            ?>
                            <li>
                                <a href='index.html'> Logout </a>
                            </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="content">
            <div class="page-wrapper">
                <div class="container-login">
                    <h1>Criação de formulário</h1>
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
                            $id = $_GET['usuario'];
                            echo    "<input type='hidden' id='usuario' name='usuario' value='$id'>";
                            ?>
                           
                        </div>
                        <div class="botao">
                            <button>
                                <input type="submit" value="Publicar formulario" name="salvar_form" id="publicar-formulario">
                            </button>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>




</body>
</html>