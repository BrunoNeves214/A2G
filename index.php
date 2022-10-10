<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About 2 Game - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<?php
 include 'header.php';
?>
<!---------------------HOMEPAGE CONTEUDO--------------------->
  <section class="conteudo">
    <div class="container">
<!---------------------HOMEPAGE CONTEUDO SLIDER--------------------->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Imagens/1280x720/cyberpunk2077.jpg" class="d-block w-100" alt="Cyberpunk 2077">
            <div class="carousel-caption d-none d-md-block">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Imagens/1280x720/farCry6.jpg" class="d-block w-100" alt="Far Cry 6">
            <div class="carousel-caption d-none d-md-block">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Imagens/1280x720/mortalKombat.jpg" class="d-block w-100" alt="Mortal Kombat">
            <div class="carousel-caption d-none d-md-block">
              <p class="hid">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!---------------------HOMEPAGE CONTEUDO NOTÍCIAS E ANÁLISES--------------------->
      <div class="separadorNot"></div>
      <div class="row noticias">
        <div class="col-12 col-md-5 col-lg-4 imagem">
          <a href="game.php">
            <img src="Imagens/400x200/deusEx.jpg" class="img-fluid" alt="Deus Ex">
          </a>
        </div>
        <div class="col-12 col-md-7 col-lg-8 descricao">
          <a href="game.php">
            <h3>Título</h3>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. Cras auctor sagittis felis. Proin finibus purus dictum molestie sodales. Vivamus eget nunc non enim cursus imperdiet.</p>
          <a href="game.php">
            <button type="button" class="hide">Ler mais</button>
          </a>
        </div>
      </div>
      <div class="separadorNot"></div>
      <div class="row noticias">
        <div class="col-12 col-md-7 col-lg-8 descricao">
          <a href="game.php">
            <h3>Título</h3>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. Cras auctor sagittis felis. Proin finibus purus dictum molestie sodales. Vivamus eget nunc non enim cursus imperdiet.</p>
          <a href="game.php">
            <button type="button" class="hide">Ler mais</button>
          </a>
        </div>
        <div class="col-12 col-md-5 col-lg-4 imagem">
            <a href="game.php">
              <img src="Imagens/400x200/Borderlands3.jpg" class="img-fluid" alt="Borderlands 3">
            </a>
        </div>
      </div>
      <div class="separadorNot"></div>
      <div class="row noticias">
        <div class="col-12 col-md-5 col-lg-4 imagem">
          <a href="game.php">
            <img src="Imagens/400x200/crysis.jpg" class="img-fluid" alt="Crysis">
          </a>
        </div>
        <div class="col-12 col-md-7 col-lg-8 descricao">
          <a href="game.php">
            <h3>Título</h3>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. Cras auctor sagittis felis. Proin finibus purus dictum molestie sodales. Vivamus eget nunc non enim cursus imperdiet.</p>
          <a href="game.php">
            <button type="button" class="hide">Ler mais</button>
          </a>
        </div>
      </div>
      <div class="separadorNot"></div>
      <div class="row noticias">
        <div class="col-12 col-md-7 col-lg-8 descricao">
          <a href="game.php">
            <h3>Título</h3>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. Cras auctor sagittis felis. Proin finibus purus dictum molestie sodales. Vivamus eget nunc non enim cursus imperdiet.</p>
          <a href="game.php">
            <button type="button" class="hide">Ler mais</button>
          </a>
        </div>
        <div class="col-12 col-md-5 col-lg-4 imagem">
          <a href="game.php">
            <img src="Imagens/400x200/mafia3.jpg" class="img-fluid" alt="Mafia 3">
          </a>
        </div>
      </div>
      <div class="separadorNot"></div>
      <div class="row noticias">
        <div class="col-12 col-md-5 col-lg-4 imagem">
          <a href="game.php">
            <img src="Imagens/400x200/GTA5.jpg" class="img-fluid" alt="GTA 5">
          </a>
        </div>
        <div class="col-12 col-md-7 col-lg-8 descricao">
          <a href="game.php">
            <h3>Título</h3>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et nibh vel ligula sagittis suscipit. Nullam et augue ante. Integer malesuada porttitor purus, sed accumsan tortor vulputate ut. Cras auctor sagittis felis. Proin finibus purus dictum molestie sodales. Vivamus eget nunc non enim cursus imperdiet.</p>
          <a href="game.php">
            <button type="button" class="hide">Ler mais</button>
          </a>
        </div>
      </div>
    </div>
  </section>
<?php
  include 'footer.php';
?>



