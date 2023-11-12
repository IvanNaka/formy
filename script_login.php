<?php 
include_once 'connection.php';
include 'functions.php';
?>

<?php  
    if(isset($_POST['login'])) {
        echo "teste";
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $senha = mysqli_real_escape_string($connection, $_POST['senha']);
        $sql = "SELECT id_usuario
        FROM tbusuario 
        WHERE email = '$email'
        AND senha= '$senha';";
        echo $sql;
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