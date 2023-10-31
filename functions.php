<?php
        if(isset($_POST['cadastro'])) {
            $name = mysqli_real_escape_string($connection, $_POST['nome']);
            $cpf = mysqli_real_escape_string($connection, $_POST['cpf']);
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $senha = mysqli_real_escape_string($connection, $_POST['senha']);

            $sql = "INSERT INTO user (nome, cpf, email, senha) VALUES ('$name','$cpf','$email','$senha')";

            if(mysqli_query($connection, $sql)) {
                echo 'Success!';
            } else {
                echo 'Error! Could not able to execute $sql' . mysqli_error($connection);
            }
        }

        mysqli_close($connection);
    ?>