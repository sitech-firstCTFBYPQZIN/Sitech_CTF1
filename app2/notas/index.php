<?php
require '../db1.php';
$user = $_SESSION['user'];
$id = $_SESSION['id'];
if ($id == 1) {
  $sql = "select * from notes;";
} else {
  $sql = "select * from notes where user = '{$user}';";
}
$sql_query = mysqli_query($connect, $sql);
$notas = mysqli_fetch_all($sql_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="icon" type="imagem/ico" href="/images/anime_icon.png" />
  <link rel="stylesheet" type="text/css" href="/css/notas.css" media="screen" />
  <link href="/iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Anotações</title>
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
              <a href="/dashboard/" class="nav-link"><i class="bi bi-journal-text"></i>&nbsp;Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="/logout.php" class="nav-link"><i class="bi bi-lock"></i>&nbsp;Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php
  foreach ($notas as $note) { ?>
    <div id="notes">
      <div class="contents-box">
        <h3><?php echo base64_decode($note[1]); ?></h3>
        <p><?php echo base64_decode($note[2]); ?></p>
        <?php if ($id == 1) {
          echo "<p>By: {$note[0]}</p>";
        } ?>
      </div>
    </div>
  <?php } ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <noscript>Ative seu JS para acessar o site</noscript>
</body>

</html>