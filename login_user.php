<?php 

    //Incluir arquivo de conexão com o banco de dados

    include "database.php";

    //Iniciar sessão em php


    $login = $_POST['login_user'];
    $password = $_POST['password_user'];

    $email = $_POST['login_email'];
    
    
    session_start();

    // Criar uma validação para verificar se os campos do formulário estão preenchidos

    if(empty($login)){
        $_SESSION['mensagem'] = "Preencha o campo de login !";
        header("Location: index.php");
    }
    elseif(empty($password)){
        $_SESSION['mensagem'] = "Preencha o campo de senha !";
        header("Location: index.php");
    }
    else{
 

  // verifique as credenciais do usuário e, se for bem-sucedido, crie uma sessão para o usuário




        // Criar o sql para validar os dados
        $sql_login = "SELECT * FROM pets_user WHERE login_user = '$login' AND login_password = '$password'";

        // Recuperar os dados do banco

        $resultado = mysqli_query($conexao, $sql_login);

        // Converter o resultado em um array associativo

        $dados = mysqli_fetch_array($resultado);

        // Validar o login e senha com o retorno dos dados

        if ($dados['login_user'] == $login and $dados['login_password'] == $password) {
            // criar um array com os dados do usuario
            $usuario = array(
                "login" => $dados['login_user'],
                "senha" => $dados['login_password'],
                "perfil" => $dados['login_profile'],
                "email" => $dados['login_email'],
                "id" => $dados['id_user']
            );
        
            // iniciar a sessão do usuário
            session_start();
        
            // adicionar o array do usuário na sessão
            $_SESSION['usuario'] = $usuario;
        
            // redirecionar para página de verificação
            header("Location: painel.php");
        }

        // if($dados['login_user'] == $login and $dados['login_password'] == $password){

        //     // criar um array com os dados do usuario
        //     $usuario = array("login" => $dados['login_user'], "senha" => $dados['login_password'], "perfil" => $dados['login_profile']);
            
        //     // Colocar array de usuario na sessão

        //     $_SESSION['usuario'] = $usuario;

        //     // Redirecionando para página de verificação
        //     header("Location: painel.php");
        // }
        // else{
        //     // Criar na sessão mensagem o aviso de erro de login e senha
        //     $_SESSION['mensagem'] = "Login ou senha inválidos";
        //     header("Location: index.php");
        // }
        }

    