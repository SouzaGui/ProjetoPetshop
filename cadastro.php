<?php

    include "database.php";

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $perfil = $_POST["perfil"];

    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];
   

    $sql = "INSERT INTO pets_user (login_user, login_sobrenome, login_email, login_password, login_endereco, login_cidade, login_cep, login_profile) 
    VALUES ('$nome','$sobrenome', '$email', '$senha','$endereco', '$cidade', '$cep', '$perfil')";






    if(mysqli_query($conexao,$sql))
    {
        header("Location: index.php");
    }
    else
    {
        echo"Erro ao cadastrar";
    }
