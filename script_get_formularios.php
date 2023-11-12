<?php 
include_once 'connection.php';
?>


<?php  
    if(isset($_GET['getFormularios'])) {
        $userId = mysqli_real_escape_string($connection, $_POST['usuario']);
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
                        echo $imagem;
                        echo '<b>nome:</b> ' .$row['nome'] .'<br>';
                        echo '----------------------<br>';
                    }
                } else {
                    return NULL;    
            };} else {
                return NULL;
        }
    }
    mysqli_close($connection);
?>

<?php 
function getFormsUsuario($userId, $connection){
    $sql = "SELECT *
     FROM tbformulario 
     WHERE id_usuario = '$userId'
     ORDER BY dat_criacao DESC
;";
    if (isset($connection)){
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<b>nome:</b> ' .$row['nome'] .'<br>';
                    echo '<b>CPF:</b> ' .$row['cpf'] .'<br>';
                    echo '<b>Email:</b> ' .$row['email'] .'<br>';
                    echo '----------------------<br>';
                }
            } else {
                return NULL;    
        };} else {
            return NULL;
    }
}
?>