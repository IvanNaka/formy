<?php 
include_once 'connection.php';
?>

<?php 
function getUserId($nome, $email, $senha, $connection){
    $sql = "SELECT id_usuario
     FROM tbusuario 
     WHERE nome= '$nome'
     AND email = '$email'
     AND senha= '$senha'
;";
    if (isset($connection)){
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['id_usuario'];
    } else {
        return NULL;    
    };} else {
        return NULL;
    }
}
?>