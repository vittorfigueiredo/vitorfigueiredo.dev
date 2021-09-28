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
  <title>Sobre - Vitor Figueiredo</title>
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
      <div class="container-contact">
        <div class="content">
          <h2 class="page-title">Contato</h2>
          <form action="" class="contact">
            <div class="name">
              <label for="name-input">Nome:</label> </br>
              <input type="text" name="name-input" id="name-input" class="name">
            </div>
            <div class="email">
              <label for="email-input">Email:</label> </br>
              <input type="text" name="email-input" id="email-input" class="email-input">
            </div>
            <div class="assunto">
              <label for="assunto-input">Assunto:</label> </br>
              <input type="text" name="assuntu-input" id="assuntu-input" class="assunto-input">
            </div>
            <div class="submit">
              <input type="submit" name="submit" id="submit" class="submit">
            </div>
          </form>
        </div>
      </div>

      <footer>
        © 2021 <a href="https://vitorfigueiredo.dev">Vitor Figueiredo</a>
      </footer>
    </div>
  </div>
</body>
</html>