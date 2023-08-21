<?php

    include "database.php";
    
    $id_aluno = $_GET['id_alunos'];

    $sql_exclui_por_id =  "DELETE FROM sge_alunos WHERE sge_alunos.id_alunos = '$id_aluno'";


        if (mysqli_query($conexao, $sql_exclui_por_id)){
            header("Location: listar_alunos.php");
        }
        else {
            echo "Falha ao excluir cadastro !";
        }