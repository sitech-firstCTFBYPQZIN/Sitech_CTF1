<?php
session_start();
if (isset($_GET['error'])) {
  switch ($_GET['error']) {
    case 1:
      echo '<script>alert("Envie Todos os dados para registrar")</script>';
      echo '<script>window.location.href = "/register/index.php"  </script>';
      break;

    case 1:
      echo '<script>alert("Usuario Já exitente!")</script>';
      echo '<script>window.location.href = "/register/index.php" </script>';
      break;

    case 1:
      echo '<script>alert("FLAG")</script>';
      echo '<script>window.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ" </script>';
      break;

    case 1:
      echo '<script>alert("Use menos de 30 caracteres!")</script>';
      echo '<script>window.location.href = "/register/index.php" </script>';
      break;

    default:
      echo '<script>alert("Ué?")</script>';
      echo '<script>window.location.href = "/register/index.php" </script>';
      break;
  }
}
if (isset($_SESSION['auth']) && $_SESSION['auth']) {
  header('Location: /dashboard/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="icon" type="imagem/ico" href="/images/anime_icon.png" />
  <link rel="stylesheet" type="text/css" href="/css/register.css" media="screen" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Sitech</title>
</head>

<body>
  <header class="background-image">
    <nav class="navbar navbar-expand-xl navbar-light">
      <div class="container">
        <a href="/" class="navbar-brand color_menu">
          Sitech
        </a>
        <button class="navbar-toggler toggler-example button-style" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="dark-blue-text list-button"><i class="bi bi-list"></i></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#" class="nav-link disabled"><i class="bi bi-unlock"></i>&nbsp;Registrar</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link"><i class="bi bi-lock"></i>&nbsp;Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container menu_main">
    <div class="row">
      <div class="col">
        <form action="/register/reg_user.php" method="POST">
          <h2>Register</h2>
          <input required type="text" placeholder="Email">
          <input type="text" name="user" placeholder="User">
          <input required type="password" name="pass" placeholder="Password">
          <a href="/">Possui uma conta?</a>
          <button type="submit" class="btn btn-success">Register</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <noscript>Ative seu JS para acessar o site</noscript>
</body>

</html>