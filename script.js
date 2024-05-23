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

// Função para verificar se as senhas correspondem
function checkPasswordMatch() {
    var password = document.getElementById("floatingPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var errorDiv = document.getElementById("passwordMismatch");

    if (password !== confirmPassword) {
        
        errorDiv.style.display = "block";
        return false;
    } else {
        
        errorDiv.style.display = "none";
    }
    return true;
}

// Ouvinte de evento para verificar a correspondência das senhas quando o formulário é enviado
document.querySelector("form").addEventListener("submit", function(event) {
    if (!checkPasswordMatch()) {
        
        event.preventDefault();
    }
});

document.getElementById('currentYear').textContent = new Date().getFullYear();

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

        // Fechar o modal, limpar o formulário e redirecionar para a página de login após 2 segundos
        setTimeout(function() {
            successModal.hide();
            document.getElementById('registrationForm').reset();
            goToLogin();
        }, 3000);
    }
});

function goToLogin() {
    window.location.href = 'login.php';
}

function limparFormulario() {
    // Limpar os valores dos campos do formulário
    document.getElementById('floatingName').value = '';
    document.getElementById('floatingEmail').value = '';
    document.getElementById('floatingPassword').value = '';
    document.getElementById('confirmPassword').value = '';
}