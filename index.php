<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="index.php" method="post" name="cadastro">
        <div class="form">
            <div class="nome">
                <span>Nome:</span>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="cpf">
                <span>CPF:</span>
                <input type="text" name="cpf" id="cpf" oninput="maskCPF(this)">
            </div>
            <div class="email">
                <span>Email:</span>
                <input type="text" name="email" id="email">
            </div>
            <div class="senha">
                <span>Senha:</span>
                <input type="password" name="senha" id="senha">
            </div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    
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

    <script>
        function maskCPF(input){
            let cpf = input.value
            
            if(isNaN(cpf[cpf.length - 1])){ // impede entrar outro caractere que não seja número
            input.value = cpf.substring(0, cpf.length-1)
            return
            }
            
            input.setAttribute("maxlength", "14")
            if (cpf.length == 3 || cpf.length == 7) input.value += "."
            if (cpf.length == 11) input.value += "-"
        }
    </script>
</body>
</html>