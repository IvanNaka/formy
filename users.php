<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Usuários do Sistema:</h1>
    <?php
        $sql = "SELECT * FROM usuario;";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo '<b>ID:</b> ' .$row['id'] .'<br>';
                echo '<b>Nome:</b> ' .$row['nome'] .'<br>';
                echo '<b>CPF:</b> ' .$row['cpf'] .'<br>';
                echo '<b>Email:</b> ' .$row['email'] .'<br>';
                echo '----------------------<br>';
            }
        }
    ?>
</body>
</html>