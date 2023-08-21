<?php 

include "database.php";
session_start();
$id_user = $_SESSION['usuario']['id'];

$sql_exclui_cadastro = "DELETE FROM sge_login_user WHERE sge_login_user.id_user = $id_user"; 

if (mysqli_query($conexao, $sql_exclui_cadastro)){
    echo "<script>alert('Cadastro atualizado com sucesso')</script>";
    header("Location: logout.php");
}
else {
    echo "Falha ao excluir cadastro !";
}