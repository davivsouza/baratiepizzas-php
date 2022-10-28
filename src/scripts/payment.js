const nextButtonStage = document.querySelector('.next-stage-btn')
const finish_payment = document.querySelector('.finish_payment')
const stage1_fieldset = document.querySelector('.stage-1-container')
const stage2_fieldset = document.querySelector('.stage-2-container')
const stage3_fieldset = document.querySelector('.stage-3-container')

const stages_buttons = document.querySelectorAll('.stages')
const stages_progress_bar = document.querySelectorAll('.line')

let stage = 1

function handleStageButtonsStyle(index) {
  stages_progress_bar[index].style.background = "#D2A340"
  stages_buttons[index].style.color = "#D2A340"
  stages_buttons[index].style.borderColor = "#D2A340"
  stages_buttons[index].innerHTML = '<img src="/assets/icons/completed.svg" alt="Estágio completado">'
}

function checkStage(stage = 1) {
  if (stage === 2) {
    stage1_fieldset.style.display = 'none'
    stage2_fieldset.style.display = 'flex'
    handleStageButtonsStyle(0)
  
  } else {
    stage2_fieldset.style.display = 'none'
    stage3_fieldset.style.display = 'flex'
    handleStageButtonsStyle(1)
    nextButtonStage.style.display = "none"
    finish_payment.style.display = "flex"
  }
}


nextButtonStage.addEventListener('click', () => {
  stage += 1
  checkStage(stage)
})