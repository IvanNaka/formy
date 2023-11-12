<?php 
include_once 'connection.php';
include 'functions.php';
?>
    
<?php  
    if(isset($_POST['salvar_form'])) {
        $titulo = mysqli_real_escape_string($connection, $_POST['titulo']);
        $pergunta = mysqli_real_escape_string($connection, $_POST['pergunta']);
        $resposta = mysqli_real_escape_string($connection, $_POST['resposta']);
        $id_usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
        date_default_timezone_set("America/Sao_Paulo");
        $data =  date("Y-m-d");
        $sql = "INSERT INTO tbformulario (nome, dat_criacao, pergunta, resposta, id_usuario) VALUES ('$titulo','$data', '$pergunta','$resposta', '$id_usuario')";
        if(mysqli_query($connection, $sql)) {
            header("Location: home.php?usuario=$id_usuario");
        } else {
            echo 'Erro! Não foi possível criar o formulário!' . mysqli_error($connection);
        };
    }
    mysqli_close($connection);
?>


