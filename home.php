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
    <?php
        $userId = mysqli_real_escape_string($connection, $_GET['usuario']);
        $sql = "SELECT *
                FROM tbformulario 
                WHERE id_usuario = '$userId'
                ORDER BY dat_criacao DESC;";
        if (isset($connection)){
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        if (isset($row['imagem'])){
                            $imagem = '<img src="'.row['imagem'].'">';
                        }else{
                            $imagem = '<img src="./logo_formy.jpeg">';
                        }
                        echo '----------------------<br>';
                        echo $imagem;
                        echo '<b>Nome:</b> ' .$row['nome'] .'<br>';
                        echo '<b>Data de criação:</b> ' .$row['dat_criacao'] .'<br>';
                        echo '<form action="script_delete.php" method="post" >';    
                        echo        '<div class="form">';
                        echo            '<input type="hidden" id="id_formulario" name="id_formulario" value="'.$row['id_formulario']. '">';
                        echo            "<input type='hidden' id='usuario' name='usuario' value='$userId'>";
                        echo            '<input type="submit" value="Deletar" name="resetsenha">' ;
                        echo        '</div>';
                        echo    '</form>';
                        echo '----------------------<br>';
                    }
                } else {
                    return NULL;    
            };
        } else {
                return NULL;
        }
    ?>
</body>
</html>