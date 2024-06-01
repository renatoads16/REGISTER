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

    <!-- Biblioteca de ícones -->
    <script src="https://kit.fontawesome.com/b120a94607.js" crossorigin="anonymous"></script>

    <title>Login</title>
</head>

<body class="d-flex align-items-center py-4">
    <div class="container ">
        <div class="container d-flex justify-content-center align-items-center vh-300">
            <div class="card border-transparent shadow rounded-lg p-2" style="width: 400px;">
                <main class="w-100 m-auto form-container">
                    <div class="container d-flex justify-content-end align-items-end  py-1 ">
                        <div class="btn btn-icon" id="themeToggle" onclick="toggleTheme()">
                            <i id="themeIcon" class="bi bi-moon-stars-fill"></i>
                        </div>
                    </div>
                    <form action="searchLogin.php" method="post">
                        <div class="d-flex justify-content-center mb-3 py-3 icon-container">
                            <i class="fa-sharp fa-solid fa-fingerprint fa-bounce py-1 pr-2"></i>
                            <h1 class="h3 fw-normal">PRESENÇA DIGITAL</h1>
                        </div>

                        <div class="form-floating my-2">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="Seu e-mail" required />
                            <label for="floatingEmail">E-mail:</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" required minlength="6" />
                            <label for="floatingPassword">Senha:</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check my-3">
                                <input type="checkbox" class="form-check-input " id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Lembrar Senha</label>
                            </div>
                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Esqueci minha senha
                            </button>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button id="loginButton" type="button" class="btn btn-primary w-50 py-2" onclick="goToAdmin()">
                                <span id="buttonText">Acessar</span>
                                <span id="buttonSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="d-flex justify-content-center py-3 ">
                            <a href="cadastro.php" class="btn btn-link">Novo cadastro</a>
                        </div>
                    </form>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Resetar Senha</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="resetPassword.php" method="post" id="formResetSenha">
                                        <div class="modal-body">
                                            <div class="form-floating my-2">
                                                <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Seu e-mail" required />
                                                <label for="floatingEmail">E-mail:</label>
                                                <p>Digite seu e-mail para receber uma nova senha.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" id="btnResetSenha" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    </form>
                </main>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-1 ">
            <footer class="d-flex justify-content-center" id="logo">
                <img id="logo" src="imgs/logos.png">
            </footer>
        </div>
        <div class="d-flex justify-content-center py-1 ">
            <footer class="d-flex justify-content-center py-1" id="logo">
                <p class="mt-5 mb-3 text-body-primary">© <span id="currentYear"></span> - Rede Paraíba de Comunicação. Desenvolvido por TI.</p>
            </footer>
        </div>
    </div>

    <!-- Scripts JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</body>

</html>