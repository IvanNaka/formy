    <?php
        if(isset($_POST['cadastro'])) {
            $name = mysqli_real_escape_string($connection, $_POST['nome']);
            $email = mysqli_real_escape_string($connecnection, $tion, $_POST['email']);
            $senha = mysqli_real_escape_string($con_POST['senha']);
            $sql = "INSERT INTO tbusuario (nome, email, senha) VALUES ('$name','$email','$senha')";
            if(mysqli_query($connection, $sql)) {
                echo 'Success!';
            } else {
                echo 'Error! Could not able to execute $sql' . mysqli_error($connection);
            }
        }
        mysqli_close($connection);
    ?>