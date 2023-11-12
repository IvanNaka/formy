<?php 
include_once 'connection.php';
?>


<?php
        $userId = mysqli_real_escape_string($connection, $_GET['usuario']);
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
                        echo '----------------------<br>';
                        echo $imagem;
                        echo '<b>Nome:</b> ' .$row['nome'] .'<br>';
                        echo '<input type="hidden" id="id_formulario" name="id_formulario" value="'.$row['id_formulario']. '">';
                        echo '<b>Data de criação:</b> ' .$row['dat_criacao'] .'<br>';
                        echo '<form action="script_delete.php" method="post" >    
                            <div class="form">
                                <input type="hidden" id="id_formulario" name="id_formulario" value="2">
                                <input type="hidden" id="usuario" name="usuario" value=">
                                <input type="submit" value="Deletar" name="resetsenha"> 
                            </div>
                        </form>';
                        echo '----------------------<br>';
                    }
                } else {
                    return NULL;    
            };} else {
                return NULL;
        }
    ?>

