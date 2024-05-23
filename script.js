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
    window.location.href = 'index.html'; 
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