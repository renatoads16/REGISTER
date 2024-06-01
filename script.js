// JavaScript para ativar a validação do Bootstrap
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

// Função voltar para página de login
function goToLogin() {
    window.location.href = 'login.php'; 
}

// Temas
function applyTheme() {
    const toggle = document.body;
    const themeIcon = document.getElementById('themeIcon');

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        toggle.dataset.bsTheme = 'dark';
        toggle.classList.add('darkMode');
        themeIcon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
    } else {
        toggle.dataset.bsTheme = 'light';
        toggle.classList.remove('darkMode');
        themeIcon.classList.replace('bi-sun-fill', 'bi-moon-stars-fill');
    }
}

function toggleTheme() {
    const toggle = document.body;
    const themeIcon = document.getElementById('themeIcon');

    if (toggle.dataset.bsTheme === 'light') {
        toggle.dataset.bsTheme = 'dark';
        toggle.classList.add('darkMode');
        themeIcon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
    } else {
        toggle.dataset.bsTheme = 'light';
        toggle.classList.remove('darkMode');
        themeIcon.classList.replace('bi-sun-fill', 'bi-moon-stars-fill');
    }
}

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', applyTheme);
window.onload = applyTheme;

// Aplica o ano do código automaticamente
document.getElementById('currentYear').textContent = new Date().getFullYear();

// Verifica se as senhas correspondem
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const password = document.getElementById('floatingPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        document.getElementById('passwordMismatch').style.display = 'block';
    } else {
        document.getElementById('passwordMismatch').style.display = 'none';
        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
        
        var formData = new FormData(this);
        fetch('insert.php', {
            method: 'POST',
            body: formData
        })

        // Fechar o modal, limpar o formulário e redirecionar para a página de login após 2 segundos
        setTimeout(function() {
            successModal.hide();
            document.getElementById('registrationForm').reset();
            goToLogin();
        }, 3000);
    }
});

// Limpar os valores dos campos do formulário ao atualizar página
function limparFormulario() {    
    document.getElementById('floatingName').value = '';
    document.getElementById('floatingEmail').value = '';
    document.getElementById('floatingPassword').value = '';
    document.getElementById('confirmPassword').value = '';
}

// Função para redirecionar para a página de administração
function goToAdmin() {
    showButtonLoading();

    var email = document.getElementById('floatingEmail').value;
    var senha = document.getElementById('floatingPassword').value;

    // Cria um objeto FormData com os dados de login
    var formData = new FormData();
    formData.append('email', email);
    formData.append('password', senha);

    // Faz uma solicitação AJAX para a API PHP
    fetch('searchLogin.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log("Resposta:", data);

        if (data.trim().includes("success")) {
            console.log("Autenticação bem-sucedida.");
            setTimeout(function() {
                window.location.href = "admin.php"; // Redireciona após 3 segundos se a autenticação for bem-sucedida
            }, 2000);
        } else {
            console.log("Autenticação falhou.");
            alert('Dados inválidos, por favor tente novamente!');
            hideButtonLoading(); // Esconder o spinner imediatamente em caso de falha de autenticação
        }
    })
    .catch(error => {
        console.error('Erro:', error);
        hideButtonLoading(); // Esconder o spinner em caso de erro na solicitação AJAX
    });
}



function showButtonLoading() {
    var loginButton = document.getElementById('loginButton');
    var buttonText = document.getElementById('buttonText');
    var buttonSpinner = document.getElementById('buttonSpinner');

    loginButton.disabled = true;
    buttonText.classList.add('d-none');
    buttonSpinner.classList.remove('d-none');

}   

function hideButtonLoading() {
    var loginButton = document.getElementById('loginButton');
    var buttonText = document.getElementById('buttonText');
    var buttonSpinner = document.getElementById('buttonSpinner');

    loginButton.disabled = false;
    buttonText.classList.remove('d-none');
    buttonSpinner.classList.add('d-none');
}

// Reset password

document.addEventListener("DOMContentLoaded", function () {
    const formResetSenha = document.getElementById("formResetSenha");

    formResetSenha.addEventListener("submit", function (event) {
        event.preventDefault(); // Impede o comportamento padrão de enviar o formulário

        // Aqui você pode adicionar código adicional, se necessário

        // Submete o formulário
        this.submit();
    });
});

function goToUsers() {
    window.location.href = 'users.php'; 
}
function returnAdmin() {
    window.location.href = 'admin.php'; 
}