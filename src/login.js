// Variáveis globais
const user = document.getElementById('user')
const pass = document.getElementById('pass')
const btnSubmit = document.getElementById('submit')
const error = document.querySelector('.error')

function validateForm() {
    // Entrando no sistema, validando o usuario admin
    btnSubmit.addEventListener('click', () => {
        if (user.value == 'auda' && pass.value == 'admin') {
            window.location = './sistema.html'
        } else {
            error.style.display = 'flex'
        }
    })
}

function validateError() {
    // validação de erro
    btnSubmit.addEventListener('click', () => {
        if (user.value == '') {
            error.style.display = 'flex'
        } else {
            error.style.display = 'none'
        }
    })
}

validateError()
validateForm()