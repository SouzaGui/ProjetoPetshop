<?php

    include "head.php";

?>

<!DOCTYPE html>
    <html lang="pt-br">
<head>
    <title>Pet's Admin</title>
</head>
    <body>
        <div>
        <a href="index.php" class="voltar"><img src="../images/de-volta.png" alt="Voltar para Home"></a>
        </div>



<?php

    include "database.php";

    $produto = $_POST["nomeProduto"];
    $marca = $_POST["marca"];
    $pet = $_POST["pet"];

    $validade = $_POST["validade"];

   $sql =  "INSERT INTO produtos (nome_produto, marca_produto, pet_produto, validade_produto) 
    VALUES ('$produto', '$marca', '$pet', '$validade')";

    if(mysqli_query($conexao, $sql)){
        echo "Produto adicionado com sucesso";
    }else {
        echo "Erro ao cadastrar";
    }
    
   

    // $sql = "INSERT INTO sge_login_user (login_user, login_sobrenome, login_email, login_password, login_endereco, login_cidade, login_cep, login_profile) 
    // VALUES ('$nome','$sobrenome', '$email', '$senha','$endereco', '$cidade', '$cep', '$perfil')";

    // if(mysqli_query($conexao,$sql))
    // {
    //     header("Location: index.php");
    // }
    // else
    // {
    //     echo"Erro ao cadastrar";
    // }
?>