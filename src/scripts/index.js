const html_code = `

<div class="pop-up-buy-content">
<img src="../../assets/temp/pizza-grega-wallpaper.png" alt="Pizza Grega">
<p class="pizza-name">Pizza Grega</p>
<p class="pizza-description">
  Descrição: uma pizza vinda diretamente do colisseu em roma.
</p>
<p class="ingredients">
  Ingredientes: queijo mussarela, azeitona, cebola roxa, tomate, pimentão e carne seca.
</p>
<div class="tipo-pizza">
  <p>Escolha entre:</p>
  <div class="tipo-pizza-options">
    <button class="tipo-pizza-opt-btn">Normal</button>
    <button class="tipo-pizza-opt-btn">Vegana</button>
  </div>
  <div class="flex-box">
    <div class="row">
      <p>Por apenas: </p>
      <p class="pizza-price">R$ 30,00</p>

    </div>
    <div class="row">
      <p>Quantidade: </p>
      <div class="quantity-btn">
      <button>-</button>
      <div>1</div>
      <button>+</button>
      </div>
    </div>
  </div>
</div>
<button class="pop-up-pay-btn">Comprar</button>
<button class="pop-up-close-btn" onclick="closePopUp()">X</button>

</div>


`


const buyButtons = document.querySelectorAll('.our-menu-button')
const main_container = document.getElementsByTagName('main')[0]


 function buyPizza(name, description, wallpaper, valor){
    let popup = document.createElement('div')
    popup.classList.add('pop-up-buy-container')
    popup.style.display = "flex";
    popup.innerHTML = `

    <div class="pop-up-buy-content">
    <img src=${wallpaper} alt="Pizza Grega">
    <p class="pizza-name">${name}</p>
    <p class="pizza-description">
      Descrição: ${description}
    </p>
    <p class="ingredients">
      Ingredientes: queijo mussarela, azeitona, cebola roxa, tomate, pimentão e carne seca.
    </p>
    <div class="tipo-pizza">
      <p>Escolha entre:</p>
      <div class="tipo-pizza-options">
        <button class="tipo-pizza-opt-btn">Normal</button>
        <button class="tipo-pizza-opt-btn">Vegana</button>
      </div>
      <div class="flex-box">
        <div class="row">
          <p>Por apenas: </p>
          <p class="pizza-price">R$ ${valor}</p>
    
        </div>
        <div class="row">
          <p>Quantidade: </p>
          <div class="quantity-btn">
          <button>-</button>
          <div>1</div>
          <button>+</button>
          </div>
        </div>
      </div>
    </div>
    <button class="pop-up-pay-btn">Comprar</button>
    <button class="pop-up-close-btn" onclick="closePopUp()">X</button>
    
    </div>
    
    
    `

    main_container.appendChild(popup)
  }

function closePopUp(){
  const popup_container = document.querySelector('.pop-up-buy-container')
  main_container.removeChild(popup_container)
}