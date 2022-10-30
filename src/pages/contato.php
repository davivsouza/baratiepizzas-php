<?php
    session_start();
    if($_SESSION['logado']){
      $_SESSION['logado'] = true;
    }else{
      $_SESSION['logado'] = false;
    }
?> 
<!DOCTYPE php>
<php lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/icons/favicon-16x16.png">
  <link rel="manifest" href="../../assets/icons/site.webmanifest">
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/contato.css ">
  <link rel="stylesheet" href="../css/pizza-template.css ">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
  <title>Baratie Pizzas | Contato</title>
</head>

<body>
  <header id="header">
    <nav class="nav-container">
      <ul class="nav-menu">
        <div class="first-column">
          <li class="nav-menuitem logo">
            <a href="../../index.php">
              <img src="../../assets/icons/logo.svg" alt="Baratie Pizzas">
            </a>
          </li>
          <li class="nav-menuitem"><a href="../../index.php">Home</a></li>
          <li class="nav-menuitem"><a href="./cardapio.php">Cardápio</a></li>
          <li class="nav-menuitem"><a href="./contato.php">Contato</a></li>
        </div>
        <div class="second-column">
          <li class="nav-menuitem phone">
            <img src="../../assets/icons/phone.svg" alt="Telefone">
            <span>
              704-914-3052
            </span>
          </li>
          <li class="user">
              <?php if( $_SESSION['logado'] == false ):?>
              <a href="./login.html" title="Login/Registro">
                <img src="../../assets/icons/account.svg" alt="Cadastrar-se/Logar">
                Login/Registro
              </a>
              <?php endif ?>
              <?php if( $_SESSION['logado'] == true ):?>
                  <a href="../php/logout.php">Sair</a>
              <?php endif ?>
            </li>
          <li class="carrinho">
            <a href="./carrinho.php">
              <img src="../../assets/icons/shopping-cart.svg" alt="Carrinho">
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
            <li class="nav-menuitem"><a href="../../index.php">Home</a></li>
            <li class="nav-menuitem"><a href="./cardapio.php">Cardápio</a></li>
            <li class="nav-menuitem"><a href="./contato.php">Contato</a></li>
            <li class="nav-menuitem phone"><img src="../../assets/icons/phone.svg" alt="Telefone"><span>704-914-3052</span>
            </li>
            <li class="user">
              <?php if( $_SESSION['logado'] == false ):?>
              <a href="./login.php" title="Login/Registro">
                <img src="../../assets/icons/account.svg" alt="Cadastrar-se/Logar">
                Login/Registro
              </a>
              <?php endif ?>
              <?php if( $_SESSION['logado'] == true ):?>
                  <a href="../php/logout.php">Sair</a>
              <?php endif ?>
            </li>
            <li class="carrinho">
              <a href="./carrinho.php">
                <img src="../../assets/icons/shopping-cart.svg" alt="Carrinho">
                Carrinho
              </a>
            </li>
          </ul>
          <li class="nav-menuitem logo">
            <a href="../../index.php">
              <img src="../../assets/icons/logo.svg" alt="Baratie Pizzas">
            </a>
          </li>
        </div>
      </div>
    </nav>
  </header>
  <main id="our-contact-container">
    <h1 class="our-contact-title">ENTRE EM CONTATO</h1>
    <section id="our-contact-info">
      <div id="our-address-hours">
        <address>
          <strong class="address-city-name">
            BETAVILLE
          </strong> <br>
          Rua Charlotte, Brasil 4469
        </address>
        <div class="opening-hours">
          <div class="row">
            <strong class="weekday">
              SEGUNDA - QUINTA
            </strong>
            <p class="hour">10:00h até 21:00h</p>
          </div>
          <div class="row">
            <strong class="weekday">
              SEXTA - DOMINGO
            </strong>
            <p class="hour">12:00h até 00:00h</p>
          </div>
        </div>
        <button type="button" class="call-button">FALE CONOSCO</button>

      </div>
      <div id="gallery">
        <div class="first-column">
          <img src="../../assets/backgrounds/greek-pizza.png" alt="Pizza Grega">
          <img src="../../assets/backgrounds/peperone-pizza.png" alt="Pizza de Peperone">
          <img src="../../assets/backgrounds/swiss-pizza.png" alt="Pizza Suíça">
        </div>
        <div class="highlighted-image">
          <img src="../../assets/backgrounds/cut-pizza.png" alt="Cortando Pizza">
        </div>
      </div>
    </section>

  </main>
</body>

</php>