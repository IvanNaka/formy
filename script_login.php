<?php 
include_once 'connection.php';
include 'functions.php';
?>

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
                echo 'Erro ao realizar login! Verifique os dados inseridos.';    
            }
        } else {
            echo 'Erro ao realizar login!' . mysqli_error($connection);
        };
    }
?>