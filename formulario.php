<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responder Formulário</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
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
    <?php 
    session_start();
    $_SESSION['id'] = $_GET['usuario'];
    $id = $_GET['usuario'];
    $redirect = "criar_formulario.php?usuario=$id";
    echo ''/*<h1>Formulários</h1>'*/;
    echo ''/*"<a href=$redirect>"*/;
    echo ''/*<button>Criar Formulário</button> </a>'*/;
    ?>
    <?php
        $id_formulario = mysqli_real_escape_string($connection, $_GET['formulario']);
        $sql = "SELECT *
                FROM tbformulario 
                WHERE id_formulario = $id_formulario
                ORDER BY dat_criacao DESC;";
        if (isset($connection)){
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
                $row = mysqli_fetch_assoc($result);
                if (isset($row['imagem'])){
                    $imagem = '<img src="'.$row['imagem'].'">';
                }else{
                    $imagem = NULL;
                };
                echo '<div class="form"><b>Nome:</b> ' .$row['nome'] .'<br></div>';
                echo '<div class="form"><b>Pergunta:</b> ' .$row['pergunta'] .'<br></div>';
                echo '<div class="form">' .$imagem .'<br></div>';
                echo '<form method="post" >';    
                echo        '<div class="form">';
                echo            '<input type="hidden" id="id_formulario" name="id_formulario" value="'.$row['id_formulario']. '">';
                echo                "<div class='cpf'>";
                echo                    "<span>Digite aqui a resposta:</span>";
                echo                    "<input type='text' name='resposta' id='resposta' required >";
                echo              "</div>";
                echo            '<input type="submit" value="Verificar Resposta" name="verificar_resposta">' ;
                echo        '</div>';
                echo    '</form>';
            } else {
                return NULL;    
            };
        } else {
                return NULL;
        }
    ?>
    <?php  
        if(isset($_POST['verificar_resposta'])) {
            $id_formulario = mysqli_real_escape_string($connection, $_POST['id_formulario']);
            $resposta = mysqli_real_escape_string($connection, $_POST['resposta']);
            $sql = "SELECT id_formulario
            FROM tbformulario 
            WHERE resposta = '$resposta'
            AND id_formulario= '$id_formulario';";
            if(mysqli_query($connection, $sql)) {
                $result = mysqli_query($connection, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo '<div class="form">Resposta Certa!</div>';
                } else {
                echo '<div class="form">Resposta Errada!</div>';
                }
            } 
        }
    ?>
</body>
</html>