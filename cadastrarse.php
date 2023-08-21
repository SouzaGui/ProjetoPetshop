<?php

    include "head.php";

?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
    <title>Pet's Cadastro</title>
    </head>
    <body>
        <header>
            <div>
            <a href="index.php" class="voltar"><img src="../images/de-volta.png" alt="Voltar para Home"></a>
            </div>
        </header>
            <main class="container cadastro card-cadastro">
                <div class="login-page">
                    <form action="cadastro.php" method ="post" class="form-cadastro form">
                        <a href="index.php" class="voltar"><img src="../images/logo-pets.png" alt="Voltar para Home" width="28px"></a>
                            <h2 class="titulo-cadastro">Cadastre-se</h2>
                            <p class="texto-cadastro">Registre-se para receber novidades e promoções</p>
                            <div class="row">
                                <div class="col">   
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control input-nome" name="nome" placeholder="Nome" id="nome">
                                </div>
                                <div class="col">
                                    <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id="sobrenome">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email@example.com">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Senha</label>
                                <input type="password" class="form-control" name="senha" id="inputPassword4" placeholder="Senha">
                             </div>
                             </div>
                            
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua dos Bagres, nº 0">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade">
                                </div>
                                <div class="form-group col-md-2">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep">
                                </div>
                            </div>
                            <select name="perfil" id="perfil">
                                <option value="cliente">cliente</option>
                            </select>
                            <button type="submit" class="nav_button">Cadastrar</button>
                        </div>
                        
                </form>
        </main>

        <?php

            include "footer.php";

        ?>
        
    </body>
    </html>