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


// Aplica o ano do código automáticamente
document.getElementById('currentYear').textContent = new Date().getFullYear();

// Verifica se as senhas correpondem
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

// Limpar os valores dos campos do formulário ao atualizar página
function limparFormulario() {    
    document.getElementById('floatingName').value = '';
    document.getElementById('floatingEmail').value = '';
    document.getElementById('floatingPassword').value = '';
    document.getElementById('confirmPassword').value = '';
}


// Função para definir os dados de login no localStorage
function setLoginData() {
  
    localStorage.setItem('email', 'renato.barros@cabobranco.tv.br');
    localStorage.setItem('password', '162397');
}

// Função para redirecionar para a página de administração
function goToAdmin() {
   
    var savedEmail = localStorage.getItem('email');
    var savedPassword = localStorage.getItem('password');

    // Obtém os dados de login fornecidos pelo usuário
    var email = document.getElementById('floatingEmail').value;
    var senha = document.getElementById('floatingPassword').value;

  
    // Verifica se os dados de login fornecidos correspondem aos dados armazenados
    if (email === savedEmail && senha === savedPassword) {
              
        window.open("admin.php");
    
    } else {
        // Se as credenciais forem inválidas, você pode exibir uma mensagem de erro aqui
        alert('Dados inválidos, por favor tente novamente!')
       
    }
}

// Chama a função para definir os dados de login (você pode chamar essa função quando a página for carregada)
setLoginData();

