<?php

    include "head.php";

?>

<!DOCTYPE html>
    <html lang="pt-br">
<head>
    <title>Pet's Login</title>
</head>
    <body>
        <div>
        <a href="index.php" class="voltar"><img src="../images/de-volta.png" alt="Voltar para Home"></a>
        </div>
        <header>
        </nav>
        </header>



<!-- 
                    <form action="login_user.php" method="post" class="form-inline">
                         <input type="text" class="input-login" name="login_user" id="login_user" placeholder="Informe seu login">
                        <input type="password" class="input-login" name="password_user" id="password_user" placeholder="Informe sua senha">
                        <button type="submit" class="nav_button">Entrar</button>
                        <a href="cadastrarse.php"><button type="submit" class="nav_button">Cadastrar-se</button></a>  -->
         <div class="login-page">
                <div class="form">
                    <form class="login-form" action="login_user.php" method="post">
                        <a href="index.php"><img src="../images/logo-pets.png" alt="Logo Pets" class="img-logo"></a>
                        <h5>Bem Vindo</h5>
                        <input type="text" class="input-login" name="login_user" id="login_user" placeholder="Informe seu login">
                        <input type="password" class="input-login" name="password_user" id="password_user" placeholder="Informe sua senha">
                        <button class="button_login">Entrar</button>
                        <p class="mudar-senha"><a href="">Esqueceu sua senha ?</a></p>
                        <p class="message">Não possui cadastro ? <a href="../php/cadastrarse.php">Crie uma conta</a></p>
                        <p class="message">Ou entre com uma rede social</p>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"><img src="../images/facebook.png" alt="Entrar com facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"><img src="../images/instagram.png" alt="Entrar com instagram" width="26px"></i></a>
                            <a href="#"><i class="fa fa-google-plus"><img src="../images/gmail.png" alt="Entrar com gmail"></i></a>
                        </div>
                    </form>
                </div>
            </div>
                    <?php 
                        // Inicia a sessão em php
                        session_start();
                        if(isset($_SESSION['mensagem'])){
                            $msg = $_SESSION['mensagem'];

                            echo "<p>". $msg. "</p>";
                            unset($_SESSION['mensagem']);
                        }
                    ?> 
                </div>
                </form> 

                <?php include "footer.php"; ?>