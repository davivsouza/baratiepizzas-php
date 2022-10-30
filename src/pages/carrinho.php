<?php
    session_start();
    if($_SESSION['logado']){
      $_SESSION['logado'] = true;
    }else{
      header("Location: ../../index.php");
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
  <link rel="stylesheet" href="../../src/css/global.css">
  <link rel="stylesheet" href="../../src/css/navbar.css">
  <link rel="stylesheet" href="../../src/css/carrinho.css">
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
  <main id="carrinho-container">
    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Preço Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="product-data">
            <img src="../../assets/temp/pizza-grega.png" alt="Pizza Grega">
            <p>Pizza Grega</p>
          </td>
          <td class="quantity-product">
            <p>3</p>
            <div class="quant-btns">
              <button><img src="../../assets/icons/mais.svg" alt="Mais"></button>
              <button><img src="../../assets/icons/menos.svg" alt="Menos"></button>
            </div>
          </td>
          <td class="total-price">
            <p>R$ 90,00</p>
          </td>
        </tr>
         <tr>
          <td class="product-data">
            <img src="../../assets/temp/pizza-grega.png" alt="Pizza Grega">
            Pizza Grega
          </td>
          <td class="quantity-product">
            <p>3</p>
            <div class="quant-btns">
              <button><img src="../../assets/icons/mais.svg" alt="Mais"></button>
              <button><img src="../../assets/icons/menos.svg" alt="Menos"></button>
            </div>
          </td>
          <td class="total-price">
            <p>R$ 90,00</p>
          </td>
        </tr>
      </tbody>
    </table>
    <section class="pedido-stats">
      <strong>Resumo do Pedido</strong>
      <hr>
      <div>
        <p class="pedido-stats-price-p"> Produtos (2 itens): </p>
      <span class="pedido-stats-price-span">R$ 143,00</span>
      </div>
      <hr>
      <div>
        <p class="pedido-stats-total-p">Total: </p>
      <span class="pedito-stats-total-span">R$ 999,99</span>
      </div>
      <button type="button" class="cart-shop-btn">Continuar</button>
    </section>
  </main>
</body>