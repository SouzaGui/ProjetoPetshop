<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet's Minha Conta</title>
</head>
<body>
    <?php include_once "header.php"; 
        include_once "head.php";
    ?>


    <main class="container main-minha--conta">
        <section>
            <div class="welcome-section">
                <h2 class="welcome-title"> <?php echo '<p class="text-welcome">Bem vindo(a), ' . $_SESSION['usuario']['login'] . ' ! '?> </h2>
                <div class="gmail-user">
                     <?php echo $_SESSION['usuario']['id'];?>
                    <img src="../images/gmail.png" alt="Gmail " width="17px" class="welcome-subtitle"><?php echo '<p class="welcome-subtitle gmail">' . $_SESSION['usuario']['email'] . '</p>' ?>
                </div>
                
            </div>
            


        <div class="section-meus--dados">
            <img src="../images/img-user.png" alt="Imagem ilustrativa usuario" width="24px">
            <h3 class="titulo-meus--dados">Meus dados</h3>
        </div>
            

        <form action="update_cadastro.php" method ="post" class="form-cadastro form">
                        <a href="index.php" class="voltar"><img src="../images/logo-pets.png" alt="Voltar para Home" width="28px"></a>
                            <h2 class="titulo-cadastro">Atualizar dados</h2>
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
                                <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $_SESSION['usuario']['email'] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Senha</label>
                                <input type="password" class="form-control" name="senha" id="inputPassword4" placeholder="Senha">
                             </div>
                             </div>
                            
                            
                            <button type="submit" class="nav_button">Salvar alterações</button>

                            
                        </div>
                        
                </form>
            <button type="button" id="excluirCadastro" class="excluirCadastro">Excluir conta</button>
        </section>
    </main>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('excluirCadastro').onclick = function() {
    Swal.fire({
      title: 'Têm certeza que deseja excluir sua conta ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Sim, excluir'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../php/excluir-conta.php';
      }else{
        window.location.href = '../php/minha-conta.php';
      }
    });
  };
</script>

    
</body>
</html>