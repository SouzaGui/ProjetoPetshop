<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
    include "head.php";
?>
    <title>Pet's Home</title>
</head>
<body>
<?php include "header.php"; ?>

<section class="carousel">
  <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <ul class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active" data-interval="12000"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/carousel3.png" alt="Imagem 1">
            
          </div>
          <div class="carousel-item">
            <img src="../images/carousel2.jpg" alt="Imagem 2">
          
          </div>
          <div class="carousel-item">
            <img src="../images/carousel1.jpg" alt="Imagem 3">
          
          </div>
        </div>


        <a class="carousel-control-prev d-flex justify-content-center align-items-center" href="#myCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon" ></span>
        </a>
        <a class="carousel-control-next d-flex justify-content-center align-items-center" href="#myCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </section>

<!-- <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" data-interval="10000" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner center">
        <div class="carousel-item active">
        <img class="d-block " src="../images/carousel3.png" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
        <img class="d-block " src="../images/carousel2.jpg" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
        <img class="d-block " src="../images/carousel4.png" alt="Terceiro Slide">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
    </div>
</header> -->


<!-- <div class="card produtos cards-recomendados">
  <img class="card-img-top" src="../images/recomendado1.jpg" alt="Imagem de capa do card" width="28px">
  <div class="card-body">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div> -->


      <section class="secao--produtos" id="secao--produtos">  
        <h1 class="titulo--produtos">Mais vendidos</h1>
        <div class="produtos">
        <div class="card" style="width:  16rem;">
            <img class="card-img-top" src="../images/recomendado1.jpg" alt="Sachê cachorro, sabor carne ao molho">
            <div class="card-body produto">
            <h5 class="card-title">Sachê Pedigre</h5>
            <p class="descricao-produto">Sachê de carne ao molho em salsa para cachorros</p>
                <!-- <p class="card-text">R$ XXX,XX</p> -->
            <a href="#" class="btn btn-primary">Comprar <img src="../images/carrinho.png" alt="adicionar ao carrinho" width="19px"></a>
            </div>
        </div>

        
        <div class="produtos">
        <div class="card" style="width:  16rem;">
            <img class="card-img-top" src="../images/recomendado2.png" alt="Sachê cachorro, sabor carne ao molho">
            <div class="card-body produto">
            <h5 class="card-title">Ração Whiskas</h5>
            <p class="descricao-produto">Sabor carne para gatos</p>
                <!-- <p class="card-text">R$ XXX,XX</p> -->
            <a href="#" class="btn btn-primary">Comprar <img src="../images/carrinho.png" alt="adicionar ao carrinho" width="19px"></a>
            </div>
        </div>


        
        <div class="produtos">
        <div class="card" style="width:  16rem;">
            <img class="card-img-top" src="../images/recomendado3.jpg" alt="Sachê cachorro, sabor carne ao molho">
            <div class="card-body produto">
            <h5 class="card-title">Ração ecopet natural</h5>
            <p class="descricao-produto">Sabor frango</p>
                <!-- <p class="card-text">R$ XXX,XX</p> -->
            <a href="#" class="btn btn-primary">Comprar <img src="../images/carrinho.png" alt="adicionar ao carrinho" width="19px"></a>
            </div>
        </div>
        
        <div class="produtos">
        <div class="card" style="width:  16rem;">
            <img class="card-img-top" src="../images/recomendado5.jpg" alt="Sachê cachorro, sabor carne ao molho" height="248px">
            <div class="card-body produto">
            <h5 class="card-title">Ração VetLife</h5>
            <p class="descricao-produto">Ração VetLife para cães</p>
                <!-- <p class="card-text">R$ XXX,XX</p> -->
            <a href="#" class="btn btn-primary">Comprar <img src="../images/carrinho.png" alt="adicionar ao carrinho" width="19px"></a>
            </div>
        </div>
<!--         
        <div class="produtos"></div>
        <div class="card" style="width:  16rem;">
            <img class="card-img-top" src="../images/recomendado6.png" alt="Sachê cachorro, sabor carne ao molho">
            <div class="card-body produto">
            <h5 class="card-title">Ração GranPlus</h5>
            <p class="descricao-produto">Ração de carne e arroz para gatos castrados</p> -->
               <!-- <p class="card-text">R$ XXX,XX</p> -->
            <!-- <a href="#" class="btn btn-primary">Comprar <img src="../images/carrinho.png" alt="adicionar ao carrinho" width="19px"></a>
            </div>
        </div>
        </div> -->
    </section>

        <section class="marcas-vendidas ">
          <h2 class="titulo-marcas">Marcas mais vendidas</h2>
          <div class="marcas">
            <img src="../images/marca1.png" alt="" width="72px">
            <img src="../images/marca5.png" alt="" width="72px">
            <img src="../images/marca2.png" alt="" width="72px">
            <img src="../images/marca4.png" alt="" width="90px" height="72px">
            <img src="../images/marca6.png" alt="" width="72px">
            <img src="../images/marca7.png" alt="" width="72px">
          </div>
        </section>

        <section class="teamPets">
            <div class="container">
                <h1 class="title">Equipe</h1>
                <div class="members">
                    <div class="member"><img src="../images/member.jpg" alt=""> </div>
                    <div class="member"><img src="../images/member2.jpg" alt=""> </div>
                    <div class="member"><img src="../images/member3.jpg" alt=""> </div>
                    <div class="member"><img src="../images/member4.jpg" alt=""> </div>
                    <div class="member"><img src="../images/member6.jpg" alt=""> </div>
                </div>
            </div>
        </section>
        <section class="sobre container" id="sobre">
        <div class="company">
                <h1 class="title">Sobre Nós</h1>
                    <p>Lorem ipsum dolor sit amet. Et voluptatibus autem qui velit consectetur ea velit fugiat a amet internos. Ex alias tempora et rerum enim est nostrum assumenda!
                    Est eaque voluptatem At dolores velit ut facere galisum ab velit molestiae? Et inventore voluptas quo tempora dolores qui labore molestias ut galisum consectetur et beatae deleniti.
                    Sed voluptate mollitia ut error omnis ut dolorem molestiae At blanditiis natus non nihil alias non voluptatem voluptates. Quo minima quia eos impedit dolores vel officiis nihil hic impedit explicabo aut sequi quia et amet exercitationem. Sed magni voluptates ut tempore internos sit repellat similique?</p>
                </div>
                </section>

        <section class="newsletter ">
          <div class="newsletter-div container">
            <h3 class="titulo-newsletter">Assine nossa newsletter !</h3>
            <form action="newsletter.php" method="post">
              <label for="nomeNewsletter">Nome</label>
              <input type="text" name="nomeNewsletter" placeholder="Digite o seu nome"> 
              <label for="emailNewsletter">Email</label>
              <input type="text"  name="emailNewsletter" placeholder="Digite o seu email">
              <button class="nav_button">Cadastrar</button>
              </form>
            </div>
        </section>

        <?php include "footer.php"; ?>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>