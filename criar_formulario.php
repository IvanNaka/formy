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
                        
                        
                        <li><a href="home.php?usuario=2&formulario=1">Explorar</a></li>
                        <li>Criar formulario</li>
                        
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
                           
                        </div>
                        <div class="botao">
                        <?php 
                            session_start();
                            $_SESSION['id'] = $_GET['usuario'];
                            $id = $_GET['usuario'];
                            $redirect = "criar_formulario.php?usuario=$id";
                            echo '';
                            echo "<a href=$redirect>";
                            echo '<button><input type="submit" value="Publicar formulario"
                             name="salvar_form" id="publicar-formulario">
                            </button> </a>';
                        ?>
                        <input type="submit" value="Excluir pergunta" name="salvar_form" id="Excluir-pergunta">
                        
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <button type="button" onclick="changeSizeByBtn(15)" name="btn1" style="position: fixed;
    top: 50px; left: 83px;">
            -A
            <script src="aumentar_fonte.js"></script>

        </button>

        <button type="button" onclick="changeSizeByBtn(20)" name="btn2" style="position: fixed;
    top: 50px; left: 100px;">
            A
            <script src="aumentar_fonte.js"></script>

        </button>

        <button type="button" onclick="changeSizeByBtn(25)" name="btn3" style="position: fixed;
    top: 50px; left: 112px;">
            A+
            <script src="aumentar_fonte.js"></script>

        </button>
        <br /><br />

<script src="aumentar_fonte.js"></script>



</body>
</html>