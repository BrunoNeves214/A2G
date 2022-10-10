<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About 2 Game - Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <?php
        include 'header.php';
    ?>
<!---------------------CONTACTOS--------------------->
<section class="conteudo">
    <div class="container">
      <h1 id="titulo">Contactos</h1>
      <form action="" id="formContactos">
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" id="email" placeholder="Digite seu email" required>
        <textarea name="mensagens" id="mensagens_contacto" placeholder="Em que podemos lhe ajudar?" cols="30" rows="10" required></textarea>
        <input type="button" value="Enviar" id="btnFormContactos">
      </form>
    </div>
  </section>
    
    <?php
        include 'footer.php';
    ?>