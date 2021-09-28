<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Coda&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../src/static/css/style.css">
  <title>Blog - Vitor Figueiredo</title>
</head>
<body>
  <div class="main">
    <div class="header">
      <header>
        <h1 class="title"><a href="./blog.php">vitorfigueiredo.dev</a></h1>
        <p class="description">
          Olá, eu sou o Vitor Figueiredo.</br>Desenvolvedor backend.
        </p>
        <div class="menu">
          <a href="./blog.php">blog</a>
          <a href="./cursos.php">cursos</a>
          <a href="./sobre.php">sobre</a>
          <a href="./trabalho.php">Trabalho</a>
          <a href="./contato.php">contato</a>
        </div>
      </header>
      <div class="container">
        <div class="content">
          <?php for($i = 0; $i < 10; $i++) { ?>
          <a href="#">
            <h2 class="post-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h2>
          </a>
          <p class="post-date">01 de setembro, 2021</p>
          <?php } ?>
        </div>
      </div>

      <footer>
        © 2021 <a href="https://vitorfigueiredo.dev">Vitor Figueiredo</a>
      </footer>
    </div>
  </div>
</body>
</html>