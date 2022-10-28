<?php
    session_start();
    if($_SESSION['logado']){
      $_SESSION['logado'] = true;
    }else{
      $_SESSION['logado'] = false;
    }
?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./src/scripts/index.js" defer></script>
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/icons/favicon-16x16.png">
  <link rel="manifest" href="/assets/icons/site.webmanifest">
  <link rel="stylesheet" href="./src/css/home.css">
  <link rel="stylesheet" href="./src/css/navbar.css">
  <link rel="stylesheet" href="./src/css/global.css">
  <link rel="stylesheet" href="./src/css/pizza-template.css">
  <link rel="stylesheet" href="./src/css/popup-buy.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
  <title>Baratie Pizzas</title>
</head>

<body>
  <header id="header">
    <nav class="nav-container">
      <ul class="nav-menu">
        <div class="first-column">
          <li class="nav-menuitem logo">
            <a href="/">
              <img src="./assets/icons/logo.svg" alt="Baratie Pizzas">
            </a>
          </li>
          <li class="nav-menuitem"><a href="/">Home</a></li>
          <li class="nav-menuitem"><a href="./src/pages/cardapio.html">Cardápio</a></li>
          <li class="nav-menuitem"><a href="./src/pages/contato.html">Contato</a></li>
        </div>
        <div class="second-column">
          <li class="nav-menuitem phone">
            <img src="./assets/icons/phone.svg" alt="Telefone">
            <span>
              704-914-3052
            </span>
          </li>
          <li class="user">
          <?php if( $_SESSION['logado'] == false ):?>
            <a href="./src/pages/login.html" title="Login/Registro">
              <img src="./assets/icons/account.svg" alt="Cadastrar-se/Logar">
            </a>
            <?php endif ?>
            <?php if( $_SESSION['logado'] == true ):?>
                <a href="./src/php/logout.php">Sair</a>
            <?php endif ?>
            </li>
         
          <li class="carrinho" title="Carrinho">
            <a href="./src/pages/carrinho.html" title="Login/Registro">
              <img src="./assets/icons/shopping-cart.svg" alt="Carrinho">
            </a>
          </li>
        </div>
      </ul>
      <div class="navbar">
        <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
          </div>
          <ul class="menu-items">
            <li class="nav-menuitem"><a href="/">Home</a></li>
            <li class="nav-menuitem"><a href="./src/pages/cardapio.html">Cardápio</a></li>
            <li class="nav-menuitem"><a href="./src/pages/contato.html">Contato</a></li>
            <li class="nav-menuitem phone"><img src="./assets/icons/phone.svg" alt="Telefone"><span>704-914-3052</span>
            </li>
            <li class="user">
              <a href="./src/pages/login.html" title="Login/Registro">
                <img src="./assets/icons/account.svg" alt="Cadastrar-se/Logar">
                Login/Register
              </a>
              
            </li>
            <li class="carrinho">
              <a href="./src/pages/carrinho.html">
                <img src="./assets/icons/shopping-cart.svg" alt="Carrinho">
                Carrinho
              </a>
            </li>
          </ul>
          <li class="nav-menuitem logo">
            <a href="/">
              <img src="./assets/icons/logo.svg" alt="Baratie Pizzas">
            </a>
          </li>
        </div>
      </div>
    </nav>
  </header>
  <main id="main-container">
    <section id="main">
      <div id="main-content">
        <h1 class="main-slogan">
          <strong class="highlighted">
            MUITO
          </strong>
          MAIS
          QUE PIZZA!
        </h1>
        <p class="description-slogan">
          NOSSO MENU TEM ALGO PARA TODOS <br>
          PEÇA JÁ NO SEU DELIVERY FAVORITO.
        </p>
        <button type="button" class="show-menu">VER MENU</button>
      </div>

    </section>

    <!----------------------------- NOSSOS SERVIÇOS --------------------------- -->
    <section id="our-services-container">
      <h1 class="our-services-title">
        NOSSOS SERVIÇOS
      </h1>
      <div id="our-services-cards-container">
        <div class="our-services-card-item">
          <img src="./assets/icons/card-quality.svg" alt="Qualidade" class="our-services-card-icon">
          <p class="our-services-card-p">QUALIDADE</p>
          <p class="our-services-card-description">
            TODOS OS INGREDIENTES QUE USAMOS EM NOSSOS PRODUTOS SÃO DE EXCELENTE QUALIDADE E NÃO FAZEMOS USO DE
            AGROTÓXICOS.
          </p>
        </div>

        <div class="our-services-card-item">
          <img src="./assets/icons/card-delivery.svg" alt="Delivery" class="our-services-card-icon">
          <p class="our-services-card-p">DELIVERY</p>
          <p class="our-services-card-description">
            OS ENTREGADORES DO DELIVERY SÃO INSTRUIDOS POR NÓS PARA QUE OS PRODUTOS CHEGUEM COM A MELHOR QUALIDADE.
          </p>
        </div>

        <div class="our-services-card-item">
          <img src="./assets/icons/card-chefs.svg" alt="Chefs" class="our-services-card-icon">
          <p class="our-services-card-p">CHEFS</p>
          <p class="our-services-card-description">
            OS CHEFS SÃO ESPECIALISTAS NO QUE FAZEM E TODOS SEM EXCEÇÃO SÃO APAIXONADOS POR PIZZAS E FAZEM TUDO COM
            MUITO
            AMOR.
          </p>
        </div>
      </div>
    </section>

    <!----------------------------- NOSSO CARDÁPIO --------------------------- -->
    <section id="our-menu-container">
      <div class="our-menu-wallpaper">
        <img src="./assets/backgrounds/our-menu-bg.png" alt="Nosso Cardápio">
      </div>
      <div class="our-menu-items-container">
        <h1 class="our-menu-item-title">NOSSO CARDÁPIO</h1>

        <div class="our-menu-items">
          <div class="our-menu-item">
            <img src="./assets/temp/pizza-grega.png" alt="Pizza Grega">
            <p class="our-menu-item-name">PIZZA GREGA</p>
            <p class="our-menu-item-description">
              UMA PIZZA VINDO DIRETAMENTE DO COLISSEU EM ROMA.
            </p>
            <p class="our-menu-item-price">
              R$ 30,00
            </p>
            <button type="button" class="our-menu-button">
              COMPRAR
            </button>
          </div>

          <div class="our-menu-item">
            <img src="./assets/temp/pizza-grega.png" alt="Pizza Grega">
            <p class="our-menu-item-name">PIZZA GREGA</p>
            <p class="our-menu-item-description">
              UMA PIZZA VINDO DIRETAMENTE DO COLISSEU EM ROMA.
            </p>
            <p class="our-menu-item-price">
              R$ 30,00
            </p>
            <button type="button" class="our-menu-button">
              COMPRAR
            </button>
          </div>

          <div class="our-menu-item">
            <img src="./assets/temp/pizza-grega.png" alt="Pizza Grega">
            <p class="our-menu-item-name">PIZZA GREGA</p>
            <p class="our-menu-item-description">
              UMA PIZZA VINDO DIRETAMENTE DO COLISSEU EM ROMA.
            </p>
            <p class="our-menu-item-price">
              R$ 30,00
            </p>
            <button type="button" class="our-menu-button">
              COMPRAR
            </button>
          </div>

          <a href="./src/pages/cardapio.html" class="our-menu-show-more">Ver mais > </a>
        </div>

      </div>
    </section>

    <!----------------------------- NOSSOS CHEFES --------------------------- -->
    <section id="our-chefs-container">
      <h1 class="our-chefs-title">CONHEÇA OS CHEFES</h1>

      <div class="our-chefs-card-container">
        <div class="our-chefs-card-item">
          <img src="./assets/chefs/chef-joao.png" alt="João Duarte">
          <p class="chef-name">João Duarte</p>
          <p class="chef-description">
            JOÃO É UM ESPECIALISTA EM PIZZAS CANADENSES, ELE MOROU NO CANADÁ POR ANOS E APRENDEU COM OS MELHORES, AGORA
            ELE ESTÁ AQUI PREPARADO PARA FAZER DA SUA EXPERIÊNCIA A MELHOR DE TODAS.
          </p>
        </div>

        <div class="our-chefs-card-item">
          <img src="./assets/chefs/chef-celso.png" alt="João Duarte">
          <p class="chef-name">Celso Amaral</p>
          <p class="chef-description">
            CELSO É MESTRE EM CULINARIA ITALIANA E GREGA, ELE NASCEU NA ITÁLIA E CRESCEU NA GRÉCIA, VEIO PARA O BRASIL
            ALGUNS ANOS ATRÁS E DESDE ENTÃO ESTÁ FAZENDO UM GRANDE SUCESSO COM SUAS PIZZAS.
          </p>
        </div>

        <div class="our-chefs-card-item">
          <img src="./assets/chefs/chef-thais.png" alt="João Duarte">
          <p class="chef-name">Thais Souza</p>
          <p class="chef-description">
            THAIS CRESCEU NA SUIÇA E PASSOU PARTE DA SUA ADOSLECÊNCIA NA BELGICA, SE TORUNOU ESPECIALISTA EM PIZZA.
          </p>
        </div>

        <div class="our-chefs-card-item">
          <img src="./assets/chefs/chef-daniel.png" alt="João Duarte">
          <p class="chef-name">Daniel Jesus</p>
          <p class="chef-description">
            DANIEL É UM ESPECIALISTA EM PIZZA, ELE TÊM MAIS DE 10 ANOS DE EXPERIÊNCIA NESSE RAMO.
          </p>
        </div>

      </div>
    </section>
  </main>
</body>

</html>