<?php
    session_start();
    include("../php/api.php");
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
  <script src="../scripts/index.js" defer></script>
  <link rel="apple-touch-icon" sizes="180x180" href="../../assets/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/icons/favicon-16x16.png">
  <link rel="manifest" href="../../assets/icons/site.webmanifest">
  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/cardapio.css">
  <link rel="stylesheet" href="../css/pizza-template.css">
  <link rel="stylesheet" href="../css/popup-buy.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
  <title>Baratie Pizzas | Cardápio</title>
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
  <main id="our-menu-container">
    <p class="our-menu-title">
      Nosso Cardápio
    </p>
    <section class="our-menu-grid">
    <?php while($dado = $consulta->fetch_array()) { ?> 
      <div class="our-menu-item">
        <img src="<?php echo $dado["wallpaper_url"];?>" alt="Pizza Grega">
        <p class="our-menu-item-name"><?php echo $dado["nome"];?></p>
        <p class="our-menu-item-description">
        <?php echo $dado["descricao"];?>
        </p>
        <p class="our-menu-item-price">
        R$ <?php echo $dado["valor"];?>

        </p>
        <button type="button" class="our-menu-button" onclick='buyPizza(
          "<?php echo $dado["nome"];?>",
          "<?php echo $dado["descricao"];?>",
          "<?php echo $dado["wallpaper_url"];?>",
          "<?php echo $dado["valor"];?>"
          )' 
        >
          COMPRAR
        </button>
      </div>
      <?php } ?>   
    </section>
  </main>
</body>

</php>