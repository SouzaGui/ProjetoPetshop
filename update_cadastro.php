
<!-- Código PHP e HTML -->

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
    
    session_start();
    $nome = $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    
    // $email = $_POST['login_email'];
    
    $senha = $_POST['senha'];
    
    $id_user = $_SESSION['usuario']['id'];




    // $sql_update = "UPDATE sge_login_user SET login_user='$nome',login_sobrenome='$sobrenome',
    // login_password='$senha' WHERE sge_login_user.id_user = '$id_user'";


    $sql = "UPDATE sge_login_user SET ";
    if (!empty($nome)) {
        $sql .= "login_user = '$nome', ";
    }
    if (!empty($sobrenome)) {
        $sql .= "login_sobrenome = '$sobrenome', ";
    }
    if (!empty($senha)) {
        $sql .= "login_password = '$senha', ";
    }

    $sql = rtrim($sql, ", ");

    $sql .= " WHERE sge_login_user.id_user = $id_user";
    

    if (mysqli_query($conexao, $sql)){
        echo "Cadastro atualizado com sucesso !";
    }
    else {
        echo "Falha ao atualizar cadastro !";
    }