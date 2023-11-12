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
    <link rel="stylesheet" href="./teladelogin.css">
</head>
<body>
    <div class="page-wrapper">
            <img src="./logo_formy.jpeg">
            <div class="container-login">
                <h1>Login</h1>
                <form  method="post" >
                    <div class="form">
                        <div class="email">
                            <span>E-mail:</span>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="senha">
                            <span>Senha:</span>
                            <input type="password" name="senha" id="senha" required>
                        </div>
                        <div class="opt">
                            <p>Esqueceu sua senha?</p>
                            <a href="resetsenha.php">
                                Redefinir sua senha
                            </a>
                        </div>
                        <div class="opt">
                            <p>Não possui uma conta?</p>
                            <a href="cadastro.php">
                                Faça o cadastro
                            </a>
                        </div>
                        <input type="submit" value="Entrar" name="login"> 
                        <?php  
                            if(isset($_POST['login'])) {
                                $email = mysqli_real_escape_string($connection, $_POST['email']);
                                $senha = mysqli_real_escape_string($connection, $_POST['senha']);
                                $sql = "SELECT id_usuario
                                FROM tbusuario 
                                WHERE email = '$email'
                                AND senha= '$senha';";
                                if(mysqli_query($connection, $sql)) {
                                    $result = mysqli_query($connection, $sql);
                                    $resultCheck = mysqli_num_rows($result);
                                    if($resultCheck > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $id = $row['id_usuario'];
                                        session_start();
                                        $_SESSION['id'] = $id;
                                        header("Location: home.php?usuario=$id");
                                    } else {
                                        echo '<script type="text/javascript">
                                            alert("Erro ao realizar login! Por favor verifique os dados inseridos");
                                        </script>';
                                    }
                                } else {
                                    echo '<script type="text/javascript">
                                    alert("Erro ao realizar login!");
                                    </script>';
                                };
                            }
                        ?>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>