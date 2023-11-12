<?php 
include_once 'connection.php';
include 'functions.php';
?>

<?php  
    if(isset($_POST['resetsenha'])) {
        $id_formulario = mysqli_real_escape_string($connection, $_POST['id_formulario']);
        $usuario = mysqli_real_escape_string($connection, $_POST['usuario']);
        $sql = "DELETE FROM tbformulario 
        WHERE id_usuario = '$usuario'  
        AND id_formulario = '$id_formulario';";
        if(mysqli_query($connection, $sql)) {
            $result = mysqli_query($connection, $sql);
            header("Location: home.php?usuario=$usuario");
        } else {
            echo '<script type="text/javascript">
            alert("Erro ao deletar formulário!");
            </script>';
        };
    }
?>