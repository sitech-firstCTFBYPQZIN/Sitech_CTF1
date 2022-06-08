<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="icon" type="imagem/ico" href="/Images/fav_icon.png" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Sitech</title>
</head>

<body onscroll="isScrolled();" id="inicio">
  <header onscroll="changeBackground('');" id="my-nav">
    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container title_size">
        <a href="/" class="navbar-brand">
          Sitech
        </a>
        <div id="menu" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#inicio" class="nav-link"><i class="bi bi-house-door"></i>&nbsp;Página Inicial</a>
            </li>
            <li class="nav-item">
              <a href="#sobrenos" class="nav-link"><i class="bi bi-window"></i>&nbsp;Sobre nós</a>
            </li>
            <li class="nav-item">
              <a href="#planos" class="nav-link"><i class="bi bi-cart4"></i>&nbsp;Planos</a>
            </li>
            <li class="nav-item">
              <a href="http://No0brute0force2.timed-note.sitech/register.php" class="nav-link"><i class="bi bi-chat-dots"></i>&nbsp;Register</a>
            </li>
            <li class="nav-item">
              <a href="http://No0brute0force2.timed-note.sitech/login.php" class="nav-link"><i class="bi bi-chat-dots"></i>&nbsp;Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div id="background-video">
    <video id="style_blur" autoplay muted loop width="100%" height="100%">
      <source src="/Images/background_video.mp4">
    </video>
  </div>

  <div id="main_text">
    <h1>Sitech, tudo de melhor para você e suas anotações!</h1>
  </div>

  <div id="sobrenos"></div>
  <div id="container-main">
    <div class="text_presentation">
      <h2>Quem somos nós</h2>
    </div>
    <div class="text_presentation">
      <p>Somos a Sitech, focados em ajudar os estudantes a manterem suas anotações através da nossa Cloud.</p>
    </div>
  </div>

  <div id="planos"></div>
  <div id="plans">
    <h2>Veja nossos planos</h2>
    <div>
      <div id="plans">
        <div class="container_card">
          <div class="cards">
            <img src="/Images/cards_basico.png">
            <div class="content">
              <h2>01</h2>
              <h3>Básico</h3>
              <a href="#">Saber mais</a>
            </div>
          </div>

          <div class="cards cards2">
            <img src="/Images/cards_estudante.png">
            <div class="content">
              <h2>02</h2>
              <h3>Estudante</h3>
              <a href="#">Saber mais</a>
            </div>
          </div>

          <div class="cards cards3">
            <img src="/Images/cards_premium.png">
            <div class="content">
              <h2>03</h2>
              <h3>Premium</h3>
              <a href="#">Saber mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="container-contact">
  </div>
  <div id="contents-put">
    <h2 data-aos="zoom-out-down">Envie sua mensagem</h2>
    <p data-aos="zoom-out-up">Entre em contato com a equipe timed-note.sitech através do nosso e-mail suporte@timed-note.sitech ou preenchendo o formulário de contato abaixo.</p>
    <div id="center-card">
      <div data-aos="fade-up" id="inputs-position">
        <form action="#">
          <div class="name">
            <input type="text" placeholder="Seu Nome">
          </div>
          <div class="email">
            <input type="email" placeholder="Seu e-mail">
          </div>
          <div class="message">
            <input type="text" placeholder="Sua Mensagem">
          </div>
          <button type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>

  <footer id="footer-contents" class="bg-secondary">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="" alt="" width="180" class="mb-3">
          <p class="font-italic text-white">Oferecemos o melhor serviço do mercado, além de possuirmos uma vasta segurança dos nossos servidores.</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Links</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-white">Sobre nós</a></li>
            <li class="mb-2"><a href="#" class="text-white">Blog</a></li>
            <li class="mb-2"><a href="#" class="text-white">Funcionários</a></li>
            <li class="mb-2"><a href="#" class="text-white">Documentação</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Fale conosco</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-white">E-mail</a></li>
            <li class="mb-2"><a href="#" class="text-white">WhatsApp</a></li>
          </ul>
        </div>

        <div class="img_right">
          <a id="nav-logo" href="/">Sitech</a>
          <style>
            #nav-logo {
              font-size: 40px;
              color: white;
            }
          </style>
        </div>
      </div>
    </div>

    <div id="footer-copyright" class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2022 Sitech Todos direitos reservados.</p>
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/js/event.js"></script>
  <script type="text/javascript" src="/js/scroll.js"></script>
  <noscript>Ative seu JS para acessar o site</noscript>

</body>

</html>