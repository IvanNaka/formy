<?php 
include_once 'connection.php';
include 'functions.php';
?>
    
<?php  
    if(isset($_POST['cadastro'])) {
        $nome = mysqli_real_escape_string($connection, $_POST['nome']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $cpf = mysqli_real_escape_string($connection, $_POST['cpf']);
        $senha = mysqli_real_escape_string($connection, $_POST['senha']);
        $sql = "INSERT INTO tbusuario (nome, email, cpf, senha) VALUES ('$nome','$email', '$cpf','$senha')";
        if(mysqli_query($connection, $sql)) {
            $id =  getUserId($nome,$email, $senha, $connection);
            session_start();
            $_SESSION['id'] = $id;
            header("Location: home.php?usuario=$id");
        } else {
            echo 'Erro! Não foi possível criar a conta!' . mysqli_error($connection);
        };
    }
    mysqli_close($connection);
?>


