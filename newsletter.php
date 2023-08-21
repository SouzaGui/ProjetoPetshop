<?php

    include "database.php";

    $nome = $_POST["nomeNewsletter"];
    $email = $_POST["emailNewsletter"];


    $sql = "INSERT INTO newsletter (nome_newsletter, email_newsletter) VALUES ('$nome', '$email')";

        if(mysqli_query($conexao,$sql))
        {
            // header("Location: index.php");
            $mensagem = "Email cadastrado com sucesso!";
            echo "<script>alert('$mensagem');</script>";
            echo "<script>window.history.back();</script>";
        }   
        else
        {
            $mensagem = "Erro no cadastro. Por favor, tente novamente.";
            echo "<script>alert('$mensagem');</script>";
            echo "<script>window.history.back();</script>";
        }


        