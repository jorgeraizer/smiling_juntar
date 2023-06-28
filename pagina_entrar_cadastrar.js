function Aparecer()
{
    lateral.classList.add('animar');
}

function Fechar()
{
    lateral.classList.remove('animar');
}

function verificarEmail(event) {
    event.preventDefault(); // Impede o envio do formulário

    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if (email.toLowerCase() === 'admin' && senha === '123') {
        window.location.href = 'pagina_registro_por_emailadministrador.html';
    } else {
        document.getElementById('login-form').submit();
    }
}