<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    
    <title>Cadastro</title>
</head>
<body>
    
    <body class="d-flex align-items-center py-4" onload="limparFormulario()">
        <div class="container ">
            <div class="container d-flex justify-content-center align-items-center vh-300">
                <div class="card border-transparent shadow rounded-lg p-2" style="width: 400px;">
                    <main class="w-100 m-auto form-container">
                        <div class="container d-flex justify-content-between align-items-end  py-1 ">
                            <div>
                                <button class="btn btn-icon" id="goToLogin" onclick="goToLogin()">
                                    <i class="bi bi-arrow-return-left"></i>                                  
                                </button>
                            </div>
                            <div class="btn btn-icon" id="themeToggle" onclick="toggleTheme()">
                                <i id="themeIcon" class="bi bi-moon-stars-fill" ></i>
                            </div>
                        </div>
                        <form id="registrationForm">
                            <div class="d-flex justify-content-center mb-3 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-fill me-2" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                <h1 class="h3 fw-normal">NOVO CADASTRO</h1>
                            </div>
                            <div class="form-floating my-2">
                                <input type="text" class="form-control" id="floatingName" placeholder="Nome completo" required autocomplete="off"/>
                                <label for="floatingName">Nome completo:</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="email" class="form-control" id="floatingEmail" placeholder="E-mail" required autocomplete="off"/>
                                <label for="floatingEmail">E-mail:</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" required minlength="6"/>
                                <label for="floatingPassword">Senha:</label>
                            </div>
                            <div class="form-floating my-2">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar Senha" required minlength="6"/>
                                <label for="confirmPassword">Confirmar Senha:</label>
                                <div id="passwordMismatch" class="text-danger" style="display: none;">As senhas não correspondem.</div>
                            </div>
                    
                            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="successModalLabel">Cadastro realizado com sucesso!</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="goToLogin()"></button>
                                        </div>
                                        <div class="modal-body text-center" id="checkIcon">
                                            <i class="bi bi-check-circle-fill" ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50 mt-3">Cadastrar</button>
                            </div>
                        </form>              
                    </main>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5  ">
                <footer class="d-flex justify-content-center mt-5 " id="logo">
                    <img id="logo" src="imgs/logos.png">
                </footer>
            </div>
            <div class="d-flex justify-content-center py-3 ">
                <footer class="d-flex justify-content-center py-3" id="logo">
                    <p class="mt-5 mb-3 text-body-primary">© <span id="currentYear"></span> - Rede Paraíba de Comunicação. Desenvolvido por TI.</p>
                </footer>
            </div>
        </div>
    </div>

     <!-- Scripts JS -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
     <script src="script.js"></script>
</body>
</html>