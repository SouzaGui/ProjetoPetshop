<?php  

    include "database.php";

    $nome = $_POST["nomeAtualizar"];
    $senha = $_POST["senha"];
    $perfil = $_POST["perfil"];

    $sobrenome = $_POST["sobrenomeAtualizar"];
    $email = $_POST["emailAtualizar"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];

    $sql = "UPDATE pets SET login_user = '[$nome]' , login_sobrenome ='[$sobrenome]', login_email='[$email]', login_password='[$senha]',
    login_endereco ='[$endereco]',login_cidade ='[$cidade]', login_cep ='[$cep]', login_profile ='[$perfil]' WHERE 1";