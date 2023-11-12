<?php 
include_once 'connection.php';
include 'functions.php';
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
                echo $row;
                echo 'Resposta Certa!';
            } else {
               echo 'Resposta Errada!';
            }
        } 
    }
?>