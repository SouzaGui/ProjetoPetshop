<nav class="navbar navbar-expand-lg navbar-light navbar-header">
  <a class="navbar-brand" href="../php/index.php"><img src="../images/logo-pets.png" alt="Logo Pets" class="img-logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../php/produtos.php">Produtos <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#sobre">Sobre nós</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <?php
      session_start();
      if (isset($_SESSION['usuario'])) {
        // Exibir o nome do usuário
        $usuario = $_SESSION['usuario'];
        $perfil = $usuario['perfil'];
        $login = $_SESSION['usuario']['login'];

        if ($perfil == "admin") {
          echo '<p class="text-welcome">Olá, ' . $login . '!</p>';
          echo '<a href="../php/painel.php" class="link-Logado">Painel Administrativo</a>';
        } else {
          echo '<p class="text-welcome">Olá, ' . $login . '!</p>';
          echo '<a href="../php/minha-conta.php" class="link-Logado">Minha conta</a>';
        }

        echo '<button type="button" id="mensagem"><img src="../images/sair.png" alt="logout" class="logout"></button>';
      } else {
        // Exibir os links de login e cadastro
        echo '<a href="login.php" class="nav-link">Login</a>';
        echo '<a href="cadastrarse.php" class="nav-link">Cadastre-se</a>';
      }
      ?>
    </form>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.getElementById('mensagem').onclick = function() {
    Swal.fire({
      title: 'Têm certeza que deseja sair ?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sim, sair'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../php/logout.php';
      }else{
        window.location.href = '../php/index.php';
      }
    });
  };
</script>





