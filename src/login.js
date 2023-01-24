// Variáveis globais
const user = document.getElementById('user')
const pass = document.getElementById('pass')
const btnSubmit = document.getElementById('submit')
const error = document.querySelector('.error')

function validateForm() {
    // Entrando no sistema, validando o usuario admin
    btnSubmit.addEventListener('click', () => {
        if (user.value != 'auda' && pass.value != 'admin') {
            error.style.display = 'flex'
            user.style.border = '1px solid red'
            pass.style.border = '1px solid red'

            // timeout para retirar o erro da tela do usuario em 5 segundos
            setTimeout(() => {
                error.style.display = 'none'
                user.style.border = ''
                pass.style.border = ''

            }, 5000);
        } else {
            window.location = './sistema.html'
        }
    })
}

function validateError() {
    // validação de erro
    btnSubmit.addEventListener('click', () => {
        if (user.value == '') {
            error.style.display = 'flex'
            user.style.border = '1px solid red'
            pass.style.border = '1px solid red'

            // timeout para retirar o erro da tela do usuario em 5 segundos
            setTimeout(() => {
                error.style.display = 'none'
                user.style.border = ''
                pass.style.border = ''

            }, 5000);
        } else {
            error.style.display = 'none'
        }
    })
}


validateError()
validateForm()