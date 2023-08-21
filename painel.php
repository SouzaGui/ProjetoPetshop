<?php

    include "head.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
</head>
<body>

<?php

session_start();
    $usuario = $_SESSION['usuario'];

    if($usuario['perfil'] != "admin"){
        header("Location: index.php");
        
    }
    else
    {
?>


        <div>
            <a href="index.php" class="voltar"><img src="../images/de-volta.png" alt="Voltar para Home"></a>
        </div>
        <header>
            <nav>
                <div class="brand">
                    <a href="index.php"><img src="../images/logo-pets.png" alt="Logo SGE" class="img-logo"></a>
                </div>
            </nav>
        </header>

    <main>
        <div class="container">
        <h1>Gerenciamento Petshop</h1>
        <h3>Painel administrativo</h1>
        <br>
        <br>
        <p><?php echo $usuario['login'] ?> tem a permissão de acesso: <?php echo $usuario['perfil'];?></p>
        

        <button id="meuBotao">Cadastrar novo produto</button>
        

        <button id="botaoFuncionario">Cadastrar Funcionários</button>
        </div>
    </main>
    


    <div id="meuFormulario"> 
        <h3 class="titulo-cadastro">Cadastrar novo produto</h3>
        <form action="cadastro-Produto.php" method ="post" class="login-form">
            <!-- Coloque aqui os campos do formulário -->
            <label for="nomeProduto">Nome do Produto</label>
            <input type="text" name="nomeProduto" placeholder="Nome do produto">
            <label for="marca">Marca do produto</label>
            <input type="text" name="marca" placeholder="Marca do produto">
            <label for="pet">Pet</label>
            <select name="pet" id="pet">
                <option value="" disabled selected hidden>Selecionar</option>
                <option value="gato">Gato</option>
                <option value="cachorro">Cachorro</option>
                <option value="peixe">Peixe</option>
                <option value="outro">Outros</option>
            </select>
            <label for="validade">Data de validade</label>
            <input type="date" name="validade" id="validade" placeholder="data de validade">
            <input type="submit" value="Cadastrar produto">
        </form>
        <span id="fecharFormulario">&times;</span>
    </div>

    <script>
        document.getElementById("meuBotao").addEventListener("click", function() {
            document.getElementById("meuFormulario").style.display = "block";
        });

        document.getElementById("fecharFormulario").addEventListener("click", function() {
            document.getElementById("meuFormulario").style.display = "none";
        });
    </script>

    

    <div id="form-funcionario">
        <h3 id="titulo-cadastro">Cadastrar funcionario</h3>
            <form action="cadastro-Funcionario.php" method="post" class="login-form">
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
                  <input type="email" class="form-control" id="email" name=" email" placeholder="Email@example.com">
                </div>
            </div>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" placeholder="Insira o CPF">

            <label for="cargo">Cargo</label>
            <select name="cargo" id="cargo">
                <option value="" disabled selected hidden>Selecionar</option>
                <option value="gerente">Gerente</option>
                <option value="atendente">Atendente</option>
                <option value="repositor">Repositor</option>
            </select>
            <input type="submit" value="Cadastrar Funcionário" class="cadastrar-funcionario">

            </form>
        <span id="fecharFormulario">&times;</span>
    </div>



    <script>
        document.getElementById("botaoFuncionario").addEventListener("click", function() {
            document.getElementById("form-funcionario").style.display = "block";
        });

        document.getElementById("fecharFormulario").addEventListener("click", function() {
            document.getElementById("form-funcionario").style.display = "none";
        });
    </script>
    


    <form action="painel-Exibir.php" method="post" class="botoes-consulta">
        <input type="submit" name="btnConsultar" value="Consultar cadastro dos clientes" class="nav_button">
        <input type="submit" name="consultaProduto" value="Consultar produtos" class="nav_button">
        <input type="submit" name="consultaFuncionarios" value="Consultar cadastro dos funcionarios" class="nav_button">
    </form>

    <?php } ?>
</body>
</html>