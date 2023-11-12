<?php 
include_once 'connection.php';
include 'functions.php';
?>

<?php  
    if(isset($_POST['resetsenha'])) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $senha = mysqli_real_escape_string($connection, $_POST['senha']);
        $sql = "UPDATE tbusuario 
        SET senha = '$senha'
        WHERE email = '$email';";
        echo $sql;
        if(mysqli_query($connection, $sql)) {
            $result = mysqli_query($connection, $sql);
            header("Location: login.php");
        } else {
            echo '<script type="text/javascript">
            alert("Erro ao realizar redefinir senha!");
            </script>';
        };
    }
?>