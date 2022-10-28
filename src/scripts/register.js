const nextFormButton = document.querySelector('.next-form-btn')
const userInfoFieldset = document.querySelector('.register-user-form')
const addressInfoFieldset = document.querySelector('.register-address-form')

nextFormButton.addEventListener('click', ()=> {
  window.scrollTo({top: 0, left: 0, behavior: "smooth"})
  userInfoFieldset.style.display = 'none'
  addressInfoFieldset.style.display = 'flex'
})