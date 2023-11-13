<?php
    include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="home_forms.css">
</head>
<body>
<div class='toda_pagina'> 
    <header>
        <div class="container">
            <img src="./logo_formy.jpeg" class="logo">
            <center><div 
             style="width: 100%; height: 100%; padding: 12px; background: #DBEAFE; border-radius: 21px; border: 1px #1D4ED8 solid; justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
            <div  style="width: 18px; height: 18px; position: relative">
            <div  style="width: 12.44px; height: 12.44px; left: 2px; top: 2px; position: absolute; border: 1px #1D4ED8 solid"></div>
            <div  style="width: 3.38px; height: 3.38px; left: 12.62px; top: 12.62px; position: absolute; border: 1px #1D4ED8 solid"></div>
            </div>
            <div  style="flex: 1 1 0; color: #2563EB; font-size: 24px; font-family: Work Sans; font-weight: 400; line-height: 16px; word-wrap: break-word">Pesquisar</div>
            </div></center>
                    <div class="right">
                        <ul>
                            <li>Explorar</li>
                            <li> 
                                <?php	
                                    $id = $_GET['usuario'];
                                    $redirect = "criar_formulario.php?usuario=$id";
                                    echo "<a href=$redirect>Criar Formulario</a>";
                                ?>
                            </li>
                            <li>Sobre nós</li>
                            <li>Contato</li>
                            <li>Suporte</li>
                        </ul>
                    </div>
            </div>
    </header>
    <div class=pagina style="display:flex; width=1080px">
        <div class='lista_materias' style="display: inline-block; margin-right:20px; ">
            <div class="materias">Matemática</div>
            <div class="materias">Português</div>
            <div class="materias">Física</div>
            <div class="materias">Química</div>
            <div class="materias">Geografia</div>
            <div class="materias">História</div>
            <div class="materias">Sociologia</div>
            <div class="materias">Filosofia</div>
            <div class="materias">Favoritos</div>
        </div>
        <div class="lista_forms" style="display:flex; justify-content: center; gap:25px">
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
                                $imagem = '<img src="'.$row['imagem'].'">';
                            }else{
                                $imagem = '<img src="./logo_formy.jpeg">';
                            }
                            echo '<div class="forms">';
                            echo $imagem.'<br>';
                            echo '<b>Nome:</b> ' .$row['nome'] .'<br>';
                            echo '<b>Data de criação:</b> ' .$row['dat_criacao'] .'<br>';
                            echo '<form action="script_delete.php" method="post" >';    
                            echo        '<div class="form">';
                            echo            '<input type="hidden" id="id_formulario" name="id_formulario" value="'.$row['id_formulario']. '">';
                            echo            "<input type='hidden' id='usuario' name='usuario' value='$userId'>";
                            echo            '<input type="submit" value="Deletar" name="resetsenha">' ;
                            echo        '</div>';
                            echo '</form>';
                            echo '</div>';
                        };
                    } else {
                        return NULL;    
                };
            } else {
                    return NULL;
            }
        ?>
        </div>
    </div>
</div>
</body>
</html>